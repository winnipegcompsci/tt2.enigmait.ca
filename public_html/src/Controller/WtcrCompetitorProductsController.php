<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrCompetitorProducts Controller
 *
 * @property \App\Model\Table\WtcrCompetitorProductsTable $WtcrCompetitorProducts
 */
class WtcrCompetitorProductsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['WtcrCompetitors']
        ];
        $this->set('wtcrCompetitorProducts', $this->paginate($this->WtcrCompetitorProducts));
        $this->set('_serialize', ['wtcrCompetitorProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Competitor Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrCompetitorProduct = $this->WtcrCompetitorProducts->get($id, [
            'contain' => ['WtcrCompetitors']
        ]);
        $this->set('wtcrCompetitorProduct', $wtcrCompetitorProduct);
        $this->set('_serialize', ['wtcrCompetitorProduct']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrCompetitorProduct = $this->WtcrCompetitorProducts->newEntity();
        if ($this->request->is('post')) {
            $wtcrCompetitorProduct = $this->WtcrCompetitorProducts->patchEntity($wtcrCompetitorProduct, $this->request->data);
            if ($this->WtcrCompetitorProducts->save($wtcrCompetitorProduct)) {
                $this->Flash->success('The wtcr competitor product has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr competitor product could not be saved. Please, try again.');
            }
        }
        $wtcrCompetitors = $this->WtcrCompetitorProducts->WtcrCompetitors->find('list', ['limit' => 200]);
        $this->set(compact('wtcrCompetitorProduct', 'wtcrCompetitors'));
        $this->set('_serialize', ['wtcrCompetitorProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Competitor Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrCompetitorProduct = $this->WtcrCompetitorProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrCompetitorProduct = $this->WtcrCompetitorProducts->patchEntity($wtcrCompetitorProduct, $this->request->data);
            if ($this->WtcrCompetitorProducts->save($wtcrCompetitorProduct)) {
                $this->Flash->success('The wtcr competitor product has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr competitor product could not be saved. Please, try again.');
            }
        }
        $wtcrCompetitors = $this->WtcrCompetitorProducts->WtcrCompetitors->find('list', ['limit' => 200]);
        $this->set(compact('wtcrCompetitorProduct', 'wtcrCompetitors'));
        $this->set('_serialize', ['wtcrCompetitorProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Competitor Product id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrCompetitorProduct = $this->WtcrCompetitorProducts->get($id);
        if ($this->WtcrCompetitorProducts->delete($wtcrCompetitorProduct)) {
            $this->Flash->success('The wtcr competitor product has been deleted.');
        } else {
            $this->Flash->error('The wtcr competitor product could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
