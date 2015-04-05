<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrMarketplaceTemplates Controller
 *
 * @property \App\Model\Table\WtcrMarketplaceTemplatesTable $WtcrMarketplaceTemplates
 */
class WtcrMarketplaceTemplatesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Marketplaces']
        ];
        $this->set('wtcrMarketplaceTemplates', $this->paginate($this->WtcrMarketplaceTemplates));
        $this->set('_serialize', ['wtcrMarketplaceTemplates']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Marketplace Template id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrMarketplaceTemplate = $this->WtcrMarketplaceTemplates->get($id, [
            'contain' => ['Marketplaces']
        ]);
        $this->set('wtcrMarketplaceTemplate', $wtcrMarketplaceTemplate);
        $this->set('_serialize', ['wtcrMarketplaceTemplate']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrMarketplaceTemplate = $this->WtcrMarketplaceTemplates->newEntity();
        if ($this->request->is('post')) {
            $wtcrMarketplaceTemplate = $this->WtcrMarketplaceTemplates->patchEntity($wtcrMarketplaceTemplate, $this->request->data);
            if ($this->WtcrMarketplaceTemplates->save($wtcrMarketplaceTemplate)) {
                $this->Flash->success('The wtcr marketplace template has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr marketplace template could not be saved. Please, try again.');
            }
        }
        $marketplaces = $this->WtcrMarketplaceTemplates->Marketplaces->find('list', ['limit' => 200]);
        $this->set(compact('wtcrMarketplaceTemplate', 'marketplaces'));
        $this->set('_serialize', ['wtcrMarketplaceTemplate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Marketplace Template id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrMarketplaceTemplate = $this->WtcrMarketplaceTemplates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrMarketplaceTemplate = $this->WtcrMarketplaceTemplates->patchEntity($wtcrMarketplaceTemplate, $this->request->data);
            if ($this->WtcrMarketplaceTemplates->save($wtcrMarketplaceTemplate)) {
                $this->Flash->success('The wtcr marketplace template has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr marketplace template could not be saved. Please, try again.');
            }
        }
        $marketplaces = $this->WtcrMarketplaceTemplates->Marketplaces->find('list', ['limit' => 200]);
        $this->set(compact('wtcrMarketplaceTemplate', 'marketplaces'));
        $this->set('_serialize', ['wtcrMarketplaceTemplate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Marketplace Template id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrMarketplaceTemplate = $this->WtcrMarketplaceTemplates->get($id);
        if ($this->WtcrMarketplaceTemplates->delete($wtcrMarketplaceTemplate)) {
            $this->Flash->success('The wtcr marketplace template has been deleted.');
        } else {
            $this->Flash->error('The wtcr marketplace template could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
