<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Controller initialize override
     *
     * @return void
     */
    public function initialize(): void {
        parent::initialize();

        // Controller-level function/action whitelist for authentication
        $this->Authentication->allowUnauthenticated(['display', 'home']);
    }



    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {
        $req = $this->request->getData();
        if (!$path) {
            return $this->redirect('/');
        }
        if (isset($req['queryType'])) {
            if (in_array($req['queryType'], ['flight-result','packages-result','hotel-result'])) {
                $resultType = $req['queryType'];
                $this->set(compact('resultType'));
                switch ($req['queryType']) {
                    case 'flight-result':
                        $res = $this->flight_result($req);
                        break;

                    case 'packages-result':
                        $res = $this->package_result($req);
                        break;

                    case 'hotel-result':
                        $res = $this->hotel_result($req);
                        break;

                    default:
                        # code...
                        break;
                }
                $this->set(compact('res'));
            }
        }

        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    // search flight data
    public function flight_result($data)
    {
        $from = $data['from'];
        $to = $data['to'];
        $date = $data['date'];
        $this->loadModel('FlightData');

        $start_date = $date . ' 00:00:00';
        $end_date = $date . ' 23:59:59';

        $flight = $this->FlightData->find('all')->where(['departure' => $from, 'destination' => $to, 'departure_time >=' => $start_date, 'departure_time <=' => $end_date])->all()->toList();

        return $flight;
    }

    public function package_result($data)
    {
        $from = $data['from'];
        $to = $data['to'];
        $date = $data['date'];
        $this->loadModel('PackageData');

        $start_date = $date . ' 00:00:00';
        $end_date = $date . ' 23:59:59';

        $package = $this->PackageData->find('all')->where(['departure' => $from, 'destination' => $to, 'departure_time >=' => $start_date, 'departure_time <=' => $end_date])->all()->toList();

        return $package;
    }

    public function hotel_result($data)
    {
        $from = $data['destination'];
        $this->loadModel('HotelData');

        $hotel = $this->HotelData->find('all')->where(['hotel_city' => $from ])->all()->toList();

        return $hotel;
    }
}
