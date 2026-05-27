<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Flights Controller
 *
 * @property \App\Model\Table\FlightsTable $Flights
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FlightsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $user = $this->request->getAttribute('identity');
        $flights = $this->Flights->find()
            ->where(['Flights.user_id' => $user->id])
            ->contain(['FlightData']);

        $this->set(compact('flights'));

        $this->viewBuilder()->setLayout('customer_booking');
    }

    /**
     * View method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $flight = $this->Flights->get($id, [
            'contain' => ['FlightData', 'Reservations'],
        ]);

        $this->set(compact('flight'));

        $this->viewBuilder()->setLayout('customer_booking');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flight = $this->Flights->newEmptyEntity();
        if ($this->request->is('post')) {
            $flight = $this->Flights->patchEntity($flight, $this->request->getData());
            if ($this->Flights->save($flight)) {
                $this->Flash->success(__('The flight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight could not be saved. Please, try again.'));
        }
        $flightData = $this->Flights->FlightData->find('list', ['limit' => 200])->all();
        $this->set(compact('flight', 'flightData'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flight = $this->Flights->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flight = $this->Flights->patchEntity($flight, $this->request->getData());
            if ($this->Flights->save($flight)) {
                $this->Flash->success(__('The flight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight could not be saved. Please, try again.'));
        }
        $flightData = $this->Flights->FlightData->find('list', ['limit' => 200])->all();
        $this->set(compact('flight', 'flightData'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flight = $this->Flights->get($id);
        if ($this->Flights->delete($flight)) {
            $this->Flash->success(__('The flight has been deleted.'));
        } else {
            $this->Flash->error(__('The flight could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // save flights
    public function saveFlight($flight_data_id)
    {
        // get auth user
        $user = $this->request->getAttribute('identity');
        // get flightdata by flight_data_id
        $this->loadModel('FlightData');
        $flightData = $this->FlightData->get($flight_data_id);

        $this->loadModel('Flights');
        $flight_save = $this->Flights->newEmptyEntity();
        $flight_save->leaveFrom = $flightData->departure;
        $flight_save->goingTo = $flightData->destination;
        $flight_save->flight_departure_time = $flightData->departure_time;
        $flight_save->flight_data_id = $flightData->id;
        $flight_save->user_id = $user->id ?? 0;
        $this->Flights->save($flight_save);
        // response
        $this->Flash->success(__('The flight has been saved.'));

        return $this->redirect(['action' => 'index']);
    }
}
