<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Packages Controller
 *
 * @property \App\Model\Table\PackagesTable $Packages
 * @method \App\Model\Entity\Package[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PackagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $user = $this->request->getAttribute('identity');
        // $this->paginate = [
        //     'contain' => ['PackageData'],
        // ];
        // $packages = $this->paginate($this->Packages);
        $packages = $this->Packages->find()
            ->where(['Packages.user_id' => $user->id])
            ->contain(['PackageData']);

        $this->set(compact('packages'));

        $this->viewBuilder()->setLayout('customer_booking');
    }

    /**
     * View method
     *
     * @param string|null $id Package id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $package = $this->Packages->get($id, [
            'contain' => ['PackageData', 'Reservations'],
        ]);

        $this->set(compact('package'));

        $this->viewBuilder()->setLayout('customer_booking');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $package = $this->Packages->newEmptyEntity();
        if ($this->request->is('post')) {
            $package = $this->Packages->patchEntity($package, $this->request->getData());
            if ($this->Packages->save($package)) {
                $this->Flash->success(__('The package has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package could not be saved. Please, try again.'));
        }
        $packageData = $this->Packages->PackageData->find('list', ['limit' => 200])->all();
        $this->set(compact('package', 'packageData'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Package id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $package = $this->Packages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $package = $this->Packages->patchEntity($package, $this->request->getData());
            if ($this->Packages->save($package)) {
                $this->Flash->success(__('The package has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package could not be saved. Please, try again.'));
        }
        $packageData = $this->Packages->PackageData->find('list', ['limit' => 200])->all();
        $this->set(compact('package', 'packageData'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Package id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $package = $this->Packages->get($id);
        if ($this->Packages->delete($package)) {
            $this->Flash->success(__('The package has been deleted.'));
        } else {
            $this->Flash->error(__('The package could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function savePackage($package_data_id)
    {
        // get auth user
        $user = $this->request->getAttribute('identity');
        $this->loadModel('PackageData');
        $packageData = $this->PackageData->get($package_data_id);
        $this->loadModel('Packages');
        $package_save = $this->Packages->newEmptyEntity();
        // $package_save->flight_id = $packageData->null;
        $package_desc['leaveFrom'] = $packageData->departure;
        $package_desc['goingTo'] = $packageData->destination;
        $package_desc['package_departure_time'] = $packageData->departure_time;
        $package_desc['package_hotel_name'] = $packageData->hotel_name;
        $package_desc['package_hotel_address'] = $packageData->hotel_address;
        //var_dump($package_desc);die;
        $package_save->package_desc = json_encode($package_desc);
        $package_save->package_data_id = $packageData->id;
        $package_save->user_id = $user->id ?? 0;
        $res = $this->Packages->save($package_save);
        // response
        $this->Flash->success(__('The package has been saved.'));

        return $this->redirect(['action' => 'index']);
    }
}
