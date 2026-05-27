<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Hotels Controller
 *
 * @property \App\Model\Table\HotelsTable $Hotels
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HotelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['HotelData'],
        ];
        $user = $this->request->getAttribute('identity');
        $hotels = $this->Hotels->find()
            ->where(['Hotels.user_id' => $user->id])
            ->contain(['HotelData']);

        // $hotels = $this->paginate($this->Hotels);

        $this->set(compact('hotels'));

        $this->viewBuilder()->setLayout('customer_booking');
    }

    /**
     * View method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotel = $this->Hotels->get($id, [
            'contain' => ['HotelData', 'Reservations'],
        ]);

        $this->set(compact('hotel'));

        $this->viewBuilder()->setLayout('customer_booking');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotel = $this->Hotels->newEmptyEntity();
        if ($this->request->is('post')) {
            $hotel = $this->Hotels->patchEntity($hotel, $this->request->getData());
            if ($this->Hotels->save($hotel)) {
                $this->Flash->success(__('The hotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel could not be saved. Please, try again.'));
        }
        $hotelData = $this->Hotels->HotelData->find('list', ['limit' => 200])->all();
        $this->set(compact('hotel', 'hotelData'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotel = $this->Hotels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotel = $this->Hotels->patchEntity($hotel, $this->request->getData());
            if ($this->Hotels->save($hotel)) {
                $this->Flash->success(__('The hotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel could not be saved. Please, try again.'));
        }
        $hotelData = $this->Hotels->HotelData->find('list', ['limit' => 200])->all();
        $this->set(compact('hotel', 'hotelData'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotel = $this->Hotels->get($id);
        if ($this->Hotels->delete($hotel)) {
            $this->Flash->success(__('The hotel has been deleted.'));
        } else {
            $this->Flash->error(__('The hotel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function saveHotel($hotel_data_id)
    {
        // get auth user
        $user = $this->request->getAttribute('identity');
        $this->loadModel('HotelData');
        $hotelData = $this->HotelData->get($hotel_data_id);

        $this->loadModel('Hotels');
        $hotel_save = $this->Hotels->newEmptyEntity();
        $hotel_save->hotel_name = $hotelData->hotel_name;
        $hotel_save->hotel_price = $hotelData->hotel_price;
        $hotel_save->hotel_address = $hotelData->hotel_address;
        $hotel_save->hotel_city = $hotelData->hotel_city;
        $hotel_save->hotel_country = $hotelData->hotel_country;

        $hotel_save->hotel_data_id = $hotelData->id;
        $hotel_save->user_id = $user->id ?? 0;
        $this->Hotels->save($hotel_save);
        $this->Flash->success(__('The hotel has been saved.'));
        return $this->redirect(['action' => 'index']);
    }
}
