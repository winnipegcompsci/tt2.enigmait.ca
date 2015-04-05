<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrProductMap Controller
 *
 * @property \App\Model\Table\WtcrProductMapTable $WtcrProductMap
 */
class WtcrProductMapController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['WtcrVendors', 'WtcrProductCategories']
        ];
        $this->set('wtcrProductMap', $this->paginate($this->WtcrProductMap));
        $this->set('_serialize', ['wtcrProductMap']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Product Map id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrProductMap = $this->WtcrProductMap->get($id, [
            'contain' => ['WtcrVendors', 'WtcrProductCategories']
        ]);
        $this->set('wtcrProductMap', $wtcrProductMap);
        $this->set('_serialize', ['wtcrProductMap']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrProductMap = $this->WtcrProductMap->newEntity();
        if ($this->request->is('post')) {
            $wtcrProductMap = $this->WtcrProductMap->patchEntity($wtcrProductMap, $this->request->data);
            if ($this->WtcrProductMap->save($wtcrProductMap)) {
                $this->Flash->success('The wtcr product map has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr product map could not be saved. Please, try again.');
            }
        }
        $wtcrVendors = $this->WtcrProductMap->WtcrVendors->find('list', ['limit' => 200]);
        $wtcrProductCategories = $this->WtcrProductMap->WtcrProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('wtcrProductMap', 'wtcrVendors', 'wtcrProductCategories'));
        $this->set('_serialize', ['wtcrProductMap']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Product Map id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrProductMap = $this->WtcrProductMap->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrProductMap = $this->WtcrProductMap->patchEntity($wtcrProductMap, $this->request->data);
            if ($this->WtcrProductMap->save($wtcrProductMap)) {
                $this->Flash->success('The wtcr product map has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr product map could not be saved. Please, try again.');
            }
        }
        $wtcrVendors = $this->WtcrProductMap->WtcrVendors->find('list', ['limit' => 200]);
        $wtcrProductCategories = $this->WtcrProductMap->WtcrProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('wtcrProductMap', 'wtcrVendors', 'wtcrProductCategories'));
        $this->set('_serialize', ['wtcrProductMap']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Product Map id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrProductMap = $this->WtcrProductMap->get($id);
        if ($this->WtcrProductMap->delete($wtcrProductMap)) {
            $this->Flash->success('The wtcr product map has been deleted.');
        } else {
            $this->Flash->error('The wtcr product map could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
