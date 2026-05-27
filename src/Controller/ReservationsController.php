<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reservations Controller
 *
 * @property \App\Model\Table\ReservationsTable $Reservations
 * @method \App\Model\Entity\Reservation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReservationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $reservations = $this->Reservations->find()->contain(['Customers', 'Flights', 'Hotels', 'Services', 'Packages']);

        $this->set(compact('reservations'));
    }

    /**
     * View method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reservation = $this->Reservations->get($id, [
            'contain' => ['Customers', 'Flights', 'Hotels', 'Services', 'Packages', 'ReservationResults'],
        ]);

        $this->set(compact('reservation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reservation = $this->Reservations->newEmptyEntity();
        if ($this->request->is('post')) {
            $reservation = $this->Reservations->patchEntity($reservation, $this->request->getData());
            if ($this->Reservations->save($reservation)) {
                $this->Flash->success(__('The reservation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reservation could not be saved. Please, try again.'));
        }
        $customers = $this->Reservations->Customers->find('list', ['limit' => 200])->all();
        $flights = $this->Reservations->Flights->find('list', ['limit' => 200])->all();
        $hotels = $this->Reservations->Hotels->find('list', ['limit' => 200])->all();
        $services = $this->Reservations->Services->find('list', ['limit' => 200])->all();
        $packages = $this->Reservations->Packages->find('list', ['limit' => 200])->all();
        $this->set(compact('reservation', 'customers', 'flights', 'hotels', 'services', 'packages'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reservation = $this->Reservations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reservation = $this->Reservations->patchEntity($reservation, $this->request->getData());
            if ($this->Reservations->save($reservation)) {
                $this->Flash->success(__('The reservation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reservation could not be saved. Please, try again.'));
        }
        $customers = $this->Reservations->Customers->find('list', ['limit' => 200])->all();
        $flights = $this->Reservations->Flights->find('list', ['limit' => 200])->all();
        $hotels = $this->Reservations->Hotels->find('list', ['limit' => 200])->all();
        $services = $this->Reservations->Services->find('list', ['limit' => 200])->all();
        $packages = $this->Reservations->Packages->find('list', ['limit' => 200])->all();
        $this->set(compact('reservation', 'customers', 'flights', 'hotels', 'services', 'packages'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reservation = $this->Reservations->get($id);
        if ($this->Reservations->delete($reservation)) {
            $this->Flash->success(__('The reservation has been deleted.'));
        } else {
            $this->Flash->error(__('The reservation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
