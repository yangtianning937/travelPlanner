<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * HotelData Controller
 *
 * @property \App\Model\Table\HotelDataTable $HotelData
 * @method \App\Model\Entity\HotelData[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HotelDataController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $hotelData = $this->paginate($this->HotelData);

        $this->set(compact('hotelData'));
    }

    /**
     * View method
     *
     * @param string|null $id Hotel Data id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotelData = $this->HotelData->get($id, [
            'contain' => ['Hotels'],
        ]);

        $this->set(compact('hotelData'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotelData = $this->HotelData->newEmptyEntity();
        if ($this->request->is('post')) {
            $hotelData = $this->HotelData->patchEntity($hotelData, $this->request->getData());
            if ($this->HotelData->save($hotelData)) {
                $this->Flash->success(__('The hotel data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel data could not be saved. Please, try again.'));
        }
        $this->set(compact('hotelData'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel Data id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotelData = $this->HotelData->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotelData = $this->HotelData->patchEntity($hotelData, $this->request->getData());
            if ($this->HotelData->save($hotelData)) {
                $this->Flash->success(__('The hotel data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel data could not be saved. Please, try again.'));
        }
        $this->set(compact('hotelData'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel Data id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotelData = $this->HotelData->get($id);
        if ($this->HotelData->delete($hotelData)) {
            $this->Flash->success(__('The hotel data has been deleted.'));
        } else {
            $this->Flash->error(__('The hotel data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
