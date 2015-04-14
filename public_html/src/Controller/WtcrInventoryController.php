<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrInventory Controller
 *
 * @property \App\Model\Table\WtcrInventoryTable $WtcrInventory */
class WtcrInventoryController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['WtcrProductCategories', 'WtcrVendors']
        ];
        $this->set('wtcrInventory', $this->paginate($this->WtcrInventory));
        $this->set('_serialize', ['wtcrInventory']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Inventory id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrInventory = $this->WtcrInventory->get($id, [
            'contain' => ['WtcrProductCategories', 'WtcrVendors']
        ]);
        $this->set('wtcrInventory', $wtcrInventory);
        $this->set('_serialize', ['wtcrInventory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrInventory = $this->WtcrInventory->newEntity();
        if ($this->request->is('post')) {
            $wtcrInventory = $this->WtcrInventory->patchEntity($wtcrInventory, $this->request->data);
            if ($this->WtcrInventory->save($wtcrInventory)) {
                $this->Flash->success('The wtcr inventory has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr inventory could not be saved. Please, try again.');
            }
        }
        $wtcrProductCategories = $this->WtcrInventory->WtcrProductCategories->find('list', ['limit' => 200]);
        $wtcrVendors = $this->WtcrInventory->WtcrVendors->find('list', ['limit' => 200]);
        $this->set(compact('wtcrInventory', 'wtcrProductCategories', 'wtcrVendors'));
        $this->set('_serialize', ['wtcrInventory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Inventory id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrInventory = $this->WtcrInventory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrInventory = $this->WtcrInventory->patchEntity($wtcrInventory, $this->request->data);
            if ($this->WtcrInventory->save($wtcrInventory)) {
                $this->Flash->success('The wtcr inventory has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr inventory could not be saved. Please, try again.');
            }
        }
        $wtcrProductCategories = $this->WtcrInventory->WtcrProductCategories->find('list', ['limit' => 200]);
        $wtcrVendors = $this->WtcrInventory->WtcrVendors->find('list', ['limit' => 200]);
        $this->set(compact('wtcrInventory', 'wtcrProductCategories', 'wtcrVendors'));
        $this->set('_serialize', ['wtcrInventory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Inventory id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrInventory = $this->WtcrInventory->get($id);
        if ($this->WtcrInventory->delete($wtcrInventory)) {
            $this->Flash->success('The wtcr inventory has been deleted.');
        } else {
            $this->Flash->error('The wtcr inventory could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function receive($mfg_part_num = null)
    {
        // Input List
        /*
            GET WTCR SKU
            GET PRODUCT NAME
            GET PRODUCT CATEGORY
            GET MFG_PART_NUM
            GET VENDOR
            GET VENDOR SKU (FUNCTION ARG)
            GET VENDOR PRICE (BASE + MARKUP)
            GET RECEIVED_DATE = NOW () [ON FORM SUBMIT];
            READ IN SERIAL NUMBERS.   
        */
    }
}
