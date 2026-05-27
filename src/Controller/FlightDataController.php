<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FlightData Controller
 *
 * @property \App\Model\Table\FlightDataTable $FlightData
 * @method \App\Model\Entity\FlightData[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FlightDataController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $flightData = $this->FlightData->find()->contain(['Flights']);

        $this->set(compact('flightData'));
    }

    /**
     * View method
     *
     * @param string|null $id Flight Data id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flightData = $this->FlightData->get($id, [
            // 'contain' => ['Flights', 'Packages'],
            'contain' => ['Flights'],
        ]);

        $this->set(compact('flightData'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flightData = $this->FlightData->newEmptyEntity();
        if ($this->request->is('post')) {
            $flightData = $this->FlightData->patchEntity($flightData, $this->request->getData());
            if ($this->FlightData->save($flightData)) {
                $this->Flash->success(__('The flight data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight data could not be saved. Please, try again.'));
        }
        $this->set(compact('flightData'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Flight Data id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flightData = $this->FlightData->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flightData = $this->FlightData->patchEntity($flightData, $this->request->getData());
            if ($this->FlightData->save($flightData)) {
                $this->Flash->success(__('The flight data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight data could not be saved. Please, try again.'));
        }
        $this->set(compact('flightData'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Flight Data id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flightData = $this->FlightData->get($id);
        if ($this->FlightData->delete($flightData)) {
            $this->Flash->success(__('The flight data has been deleted.'));
        } else {
            $this->Flash->error(__('The flight data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
