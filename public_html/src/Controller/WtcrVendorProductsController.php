<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * WtcrVendorProducts Controller
 *
 * @property \App\Model\Table\WtcrVendorProductsTable $WtcrVendorProducts
 */
class WtcrVendorProductsController extends AppController
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
        $this->set('wtcrVendorProducts', $this->paginate($this->WtcrVendorProducts));
        $this->set('_serialize', ['wtcrVendorProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Vendor Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrVendorProduct = $this->WtcrVendorProducts->get($id, [
            'contain' => ['WtcrVendors', 'WtcrProductCategories']
        ]);
        $this->set('wtcrVendorProduct', $wtcrVendorProduct);
        $this->set('_serialize', ['wtcrVendorProduct']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrVendorProduct = $this->WtcrVendorProducts->newEntity();
        if ($this->request->is('post')) {
            $wtcrVendorProduct = $this->WtcrVendorProducts->patchEntity($wtcrVendorProduct, $this->request->data);
            if ($this->WtcrVendorProducts->save($wtcrVendorProduct)) {
                $this->Flash->success('The wtcr vendor product has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr vendor product could not be saved. Please, try again.');
            }
        }
        $wtcrVendors = $this->WtcrVendorProducts->WtcrVendors->find('list', ['limit' => 200]);
        $wtcrProductCategories = $this->WtcrVendorProducts->WtcrProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('wtcrVendorProduct', 'wtcrVendors', 'wtcrProductCategories'));
        $this->set('_serialize', ['wtcrVendorProduct']);
    }
    
    public function add_product($vendor_sku = null) {
              
        
        if($this->request->is('post')) {
            
            $wtcrProduct = TableRegistry::get('WtcrProducts')->newEntity();
            $wtcrProduct = TableRegistry::get('WtcrProducts')->patchEntity($wtcrProduct, $this->request->data);
            
            if(TableRegistry::get('WtcrProducts')->save($wtcrProduct)) {
                $this->Flash->success("The wtcr product has been saved.");
                return $this->redirect(['action' => 'index']);
                error_log("SAVE SUCCESS");
            } else {
                $this->Flash->error('Failed to Save WTCR Product');
				echo "<pre>" . print_r(TableRegistry::get('WtcrProducts'), TRUE) . "</pre>";               
            }
            
        } else {
            error_log('NOT POST');
        }
               
        
        $product = $this->WtcrVendorProducts->find('all')->where(['wtcr_vendor_sku' => $vendor_sku]);
        $wtcrVendors = $this->WtcrVendorProducts->WtcrVendors->find('list', ['limit' => 200]);
        $wtcrCategories = $this->WtcrVendorProducts->WtcrProductCategories->find('list', ['limit' => 200]);
    
        $this->set('wtcrCategories', $wtcrCategories);
        $this->set('wtcrVendors', $wtcrVendors);
        $this->set('product', $product->toArray());
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Vendor Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrVendorProduct = $this->WtcrVendorProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrVendorProduct = $this->WtcrVendorProducts->patchEntity($wtcrVendorProduct, $this->request->data);
            if ($this->WtcrVendorProducts->save($wtcrVendorProduct)) {
                $this->Flash->success('The wtcr vendor product has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr vendor product could not be saved. Please, try again.');
            }
        }
        $wtcrVendors = $this->WtcrVendorProducts->WtcrVendors->find('list', ['limit' => 200]);
        $wtcrProductCategories = $this->WtcrVendorProducts->WtcrProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('wtcrVendorProduct', 'wtcrVendors', 'wtcrProductCategories'));
        $this->set('_serialize', ['wtcrVendorProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Vendor Product id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrVendorProduct = $this->WtcrVendorProducts->get($id);
        if ($this->WtcrVendorProducts->delete($wtcrVendorProduct)) {
            $this->Flash->success('The wtcr vendor product has been deleted.');
        } else {
            $this->Flash->error('The wtcr vendor product could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
