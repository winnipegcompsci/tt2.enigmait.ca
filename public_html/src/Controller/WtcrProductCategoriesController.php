<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrProductCategories Controller
 *
 * @property \App\Model\Table\WtcrProductCategoriesTable $WtcrProductCategories */
class WtcrProductCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrProductCategories', $this->paginate($this->WtcrProductCategories));
        $this->set('_serialize', ['wtcrProductCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Product Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrProductCategory = $this->WtcrProductCategories->get($id, [
            'contain' => ['WtcrProducts', 'WtcrVendorProducts']
        ]);
        $this->set('wtcrProductCategory', $wtcrProductCategory);
        $this->set('_serialize', ['wtcrProductCategory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrProductCategory = $this->WtcrProductCategories->newEntity();
        if ($this->request->is('post')) {
            $wtcrProductCategory = $this->WtcrProductCategories->patchEntity($wtcrProductCategory, $this->request->data);
            if ($this->WtcrProductCategories->save($wtcrProductCategory)) {
                $this->Flash->success('The wtcr product category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr product category could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrProductCategory'));
        $this->set('_serialize', ['wtcrProductCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Product Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrProductCategory = $this->WtcrProductCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrProductCategory = $this->WtcrProductCategories->patchEntity($wtcrProductCategory, $this->request->data);
            if ($this->WtcrProductCategories->save($wtcrProductCategory)) {
                $this->Flash->success('The wtcr product category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr product category could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrProductCategory'));
        $this->set('_serialize', ['wtcrProductCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Product Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrProductCategory = $this->WtcrProductCategories->get($id);
        if ($this->WtcrProductCategories->delete($wtcrProductCategory)) {
            $this->Flash->success('The wtcr product category has been deleted.');
        } else {
            $this->Flash->error('The wtcr product category could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
