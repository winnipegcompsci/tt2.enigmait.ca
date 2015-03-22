<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrSalesVehicles Controller
 *
 * @property \App\Model\Table\WtcrSalesVehiclesTable $WtcrSalesVehicles
 */
class WtcrSalesVehiclesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrSalesVehicles', $this->paginate($this->WtcrSalesVehicles));
        $this->set('_serialize', ['wtcrSalesVehicles']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Sales Vehicle id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrSalesVehicle = $this->WtcrSalesVehicles->get($id, [
            'contain' => ['WtcrSalesVehicleTemplates']
        ]);
        $this->set('wtcrSalesVehicle', $wtcrSalesVehicle);
        $this->set('_serialize', ['wtcrSalesVehicle']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrSalesVehicle = $this->WtcrSalesVehicles->newEntity();
        if ($this->request->is('post')) {
            $wtcrSalesVehicle = $this->WtcrSalesVehicles->patchEntity($wtcrSalesVehicle, $this->request->data);
            if ($this->WtcrSalesVehicles->save($wtcrSalesVehicle)) {
                $this->Flash->success('The wtcr sales vehicle has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr sales vehicle could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrSalesVehicle'));
        $this->set('_serialize', ['wtcrSalesVehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Sales Vehicle id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrSalesVehicle = $this->WtcrSalesVehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrSalesVehicle = $this->WtcrSalesVehicles->patchEntity($wtcrSalesVehicle, $this->request->data);
            if ($this->WtcrSalesVehicles->save($wtcrSalesVehicle)) {
                $this->Flash->success('The wtcr sales vehicle has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr sales vehicle could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrSalesVehicle'));
        $this->set('_serialize', ['wtcrSalesVehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Sales Vehicle id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrSalesVehicle = $this->WtcrSalesVehicles->get($id);
        if ($this->WtcrSalesVehicles->delete($wtcrSalesVehicle)) {
            $this->Flash->success('The wtcr sales vehicle has been deleted.');
        } else {
            $this->Flash->error('The wtcr sales vehicle could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
