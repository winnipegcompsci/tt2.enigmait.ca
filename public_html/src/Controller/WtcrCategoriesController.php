<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrCategories Controller
 *
 * @property \App\Model\Table\WtcrCategoriesTable $WtcrCategories
 */
class WtcrCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrCategories', $this->paginate($this->WtcrCategories));
        $this->set('_serialize', ['wtcrCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrCategory = $this->WtcrCategories->get($id, [
            'contain' => ['Inventory']
        ]);
        $this->set('wtcrCategory', $wtcrCategory);
        $this->set('_serialize', ['wtcrCategory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrCategory = $this->WtcrCategories->newEntity();
        if ($this->request->is('post')) {
            $wtcrCategory = $this->WtcrCategories->patchEntity($wtcrCategory, $this->request->data);
            if ($this->WtcrCategories->save($wtcrCategory)) {
                $this->Flash->success('The wtcr category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr category could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrCategory'));
        $this->set('_serialize', ['wtcrCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrCategory = $this->WtcrCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrCategory = $this->WtcrCategories->patchEntity($wtcrCategory, $this->request->data);
            if ($this->WtcrCategories->save($wtcrCategory)) {
                $this->Flash->success('The wtcr category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr category could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrCategory'));
        $this->set('_serialize', ['wtcrCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrCategory = $this->WtcrCategories->get($id);
        if ($this->WtcrCategories->delete($wtcrCategory)) {
            $this->Flash->success('The wtcr category has been deleted.');
        } else {
            $this->Flash->error('The wtcr category could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
