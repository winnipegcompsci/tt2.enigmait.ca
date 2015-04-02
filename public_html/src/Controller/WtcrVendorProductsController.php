<?php
namespace App\Controller;

use App\Controller\AppController;

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
            'contain' => ['WtcrVendors', 'WtcrCategories']
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
            'contain' => ['WtcrVendors', 'WtcrCategories']
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
        $wtcrCategories = $this->WtcrVendorProducts->WtcrCategories->find('list', ['limit' => 200]);
        $this->set(compact('wtcrVendorProduct', 'wtcrVendors', 'wtcrCategories'));
        $this->set('_serialize', ['wtcrVendorProduct']);
    }

    public function add_product($vendor_sku = null) 
    {    
        echo "PARAMS:::<pre>" . print_r($this->request->params, TRUE) . "</pre>";
    
        $product = $this->WtcrVendorProducts->find('all')->where(['vendor_sku' => $vendor_sku]);     
        
        foreach($product as $item) {
            error_log("ITEM:: " . print_r($item, TRUE) );
        }
        
        $wtcrVendors = $this->WtcrVendorProducts->WtcrVendors->find('list', ['limit' => 200]);
        $wtcrCategories = $this->WtcrVendorProducts->WtcrCategories->find('list', ['limit' => 200]);

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
        $wtcrCategories = $this->WtcrVendorProducts->WtcrCategories->find('list', ['limit' => 200]);
        $this->set(compact('wtcrVendorProduct', 'wtcrVendors', 'wtcrCategories'));
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
