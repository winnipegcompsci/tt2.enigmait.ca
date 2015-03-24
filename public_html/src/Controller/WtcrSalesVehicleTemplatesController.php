<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrSalesVehicleTemplates Controller
 *
 * @property \App\Model\Table\WtcrSalesVehicleTemplatesTable $WtcrSalesVehicleTemplates
 */
class WtcrSalesVehicleTemplatesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrSalesVehicleTemplates', $this->paginate($this->WtcrSalesVehicleTemplates));
        $this->set('_serialize', ['wtcrSalesVehicleTemplates']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Sales Vehicle Template id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrSalesVehicleTemplate = $this->WtcrSalesVehicleTemplates->get($id, [
            'contain' => ['WtcrSalesVehicles']
        ]);
        $this->set('wtcrSalesVehicleTemplate', $wtcrSalesVehicleTemplate);
        $this->set('_serialize', ['wtcrSalesVehicleTemplate']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrSalesVehicleTemplate = $this->WtcrSalesVehicleTemplates->newEntity();
        if ($this->request->is('post')) {
            $wtcrSalesVehicleTemplate = $this->WtcrSalesVehicleTemplates->patchEntity($wtcrSalesVehicleTemplate, $this->request->data);
            if ($this->WtcrSalesVehicleTemplates->save($wtcrSalesVehicleTemplate)) {
                $this->Flash->success('The wtcr sales vehicle template has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr sales vehicle template could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrSalesVehicleTemplate'));
        $this->set('_serialize', ['wtcrSalesVehicleTemplate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Sales Vehicle Template id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrSalesVehicleTemplate = $this->WtcrSalesVehicleTemplates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrSalesVehicleTemplate = $this->WtcrSalesVehicleTemplates->patchEntity($wtcrSalesVehicleTemplate, $this->request->data);
            if ($this->WtcrSalesVehicleTemplates->save($wtcrSalesVehicleTemplate)) {
                $this->Flash->success('The wtcr sales vehicle template has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr sales vehicle template could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrSalesVehicleTemplate'));
        $this->set('_serialize', ['wtcrSalesVehicleTemplate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Sales Vehicle Template id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrSalesVehicleTemplate = $this->WtcrSalesVehicleTemplates->get($id);
        if ($this->WtcrSalesVehicleTemplates->delete($wtcrSalesVehicleTemplate)) {
            $this->Flash->success('The wtcr sales vehicle template has been deleted.');
        } else {
            $this->Flash->error('The wtcr sales vehicle template could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
