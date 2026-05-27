<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PackageData Controller
 *
 * @property \App\Model\Table\PackageDataTable $PackageData
 * @method \App\Model\Entity\PackageData[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PackageDataController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $packageData = $this->PackageData->find()->contain(['Packages']);

        $this->set(compact('packageData'));
    }

    /**
     * View method
     *
     * @param string|null $id Package Data id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packageData = $this->PackageData->get($id, [
            'contain' => ['Packages'],
        ]);

        $this->set(compact('packageData'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packageData = $this->PackageData->newEmptyEntity();
        if ($this->request->is('post')) {
            $packageData = $this->PackageData->patchEntity($packageData, $this->request->getData());
            if ($this->PackageData->save($packageData)) {
                $this->Flash->success(__('The package data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package data could not be saved. Please, try again.'));
        }
        $this->set(compact('packageData'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Package Data id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packageData = $this->PackageData->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packageData = $this->PackageData->patchEntity($packageData, $this->request->getData());
            if ($this->PackageData->save($packageData)) {
                $this->Flash->success(__('The package data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package data could not be saved. Please, try again.'));
        }
        $this->set(compact('packageData'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Package Data id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packageData = $this->PackageData->get($id);
        if ($this->PackageData->delete($packageData)) {
            $this->Flash->success(__('The package data has been deleted.'));
        } else {
            $this->Flash->error(__('The package data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
