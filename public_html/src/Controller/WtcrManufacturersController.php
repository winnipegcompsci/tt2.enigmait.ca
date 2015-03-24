<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrManufacturers Controller
 *
 * @property \App\Model\Table\WtcrManufacturersTable $WtcrManufacturers
 */
class WtcrManufacturersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrManufacturers', $this->paginate($this->WtcrManufacturers));
        $this->set('_serialize', ['wtcrManufacturers']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Manufacturer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrManufacturer = $this->WtcrManufacturers->get($id, [
            'contain' => ['Inventory']
        ]);
        $this->set('wtcrManufacturer', $wtcrManufacturer);
        $this->set('_serialize', ['wtcrManufacturer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrManufacturer = $this->WtcrManufacturers->newEntity();
        if ($this->request->is('post')) {
            $wtcrManufacturer = $this->WtcrManufacturers->patchEntity($wtcrManufacturer, $this->request->data);
            if ($this->WtcrManufacturers->save($wtcrManufacturer)) {
                $this->Flash->success('The wtcr manufacturer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr manufacturer could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrManufacturer'));
        $this->set('_serialize', ['wtcrManufacturer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Manufacturer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrManufacturer = $this->WtcrManufacturers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrManufacturer = $this->WtcrManufacturers->patchEntity($wtcrManufacturer, $this->request->data);
            if ($this->WtcrManufacturers->save($wtcrManufacturer)) {
                $this->Flash->success('The wtcr manufacturer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr manufacturer could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrManufacturer'));
        $this->set('_serialize', ['wtcrManufacturer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Manufacturer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrManufacturer = $this->WtcrManufacturers->get($id);
        if ($this->WtcrManufacturers->delete($wtcrManufacturer)) {
            $this->Flash->success('The wtcr manufacturer has been deleted.');
        } else {
            $this->Flash->error('The wtcr manufacturer could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
