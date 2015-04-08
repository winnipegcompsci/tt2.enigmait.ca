<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * WtcrProducts Controller
 *
 * @property \App\Model\Table\WtcrProductsTable $WtcrProducts */
class WtcrProductsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['WtcrProductCategories']
        ];
        $this->set('wtcrProducts', $this->paginate($this->WtcrProducts));
        $this->set('_serialize', ['wtcrProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrProduct = $this->WtcrProducts->get($id, [
            'contain' => ['WtcrProductCategories']
        ]);
        $this->set('wtcrProduct', $wtcrProduct);
        $this->set('_serialize', ['wtcrProduct']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        die("WTCR PRODUCTS::: <pre>" . print_r($this->WtcrProducts, TRUE) . "</pre>");
        
        $wtcrProduct = $this->WtcrProducts->newEntity();
        
        if ($this->request->is('post')) {
            $wtcrProduct = $this->WtcrProducts->patchEntity($wtcrProduct, $this->request->data);
            
            if ($this->WtcrProducts->save($wtcrProduct)) {
                $this->Flash->success('The wtcr product has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr product could not be saved. Please, try again.');
            }
        }
        
        $wtcrProductCategories = $this->WtcrProducts->WtcrProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('wtcrProduct', 'wtcrProductCategories'));
        $this->set('_serialize', ['wtcrProduct']);
    }
    
    public function add_vendor_product($mfg_part_num) 
    {   
        $wtcrProduct = $this->WtcrProducts->newEntity();              
        
        if($this->request->is('post')) {
           $wtcrProduct = $this->WtcrProducts->patchEntity($wtcrProduct, $this->request->data);
           
           $wtcrProduct->lastupdated = date("Y-m-d H:i:s");
           
            $this->Flash->error("<pre>New Product::" . print_r($wtcrProduct, TRUE) . "</pre>");      // DEBUG
            
            if($this->WtcrProducts->save($wtcrProduct)) {
                $this->Flash->success('The Vendor product has been saved as a WTCR Product.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The Vendor product could not be saved');
                echo "New Object:: <pre>" . print_r($this->WtcrProducts->newEntity(), TRUE) . "</pre>";
                die('Product NOT SAVED:: <pre>' . print_r($wtcrProduct, TRUE) . '</pre>');
            }
            
            
        }
        
        $productVendors = TableRegistry::get('wtcr_vendor_products')->find('all', [
            'conditions' => ['mfg_part_num' => $mfg_part_num],
            'contain' => ['WtcrVendors']
            
        ]);
        
        
        
        $marketplaces = TableRegistry::get('wtcr_marketplaces')->find('all');
        $wtcrProductCategories = $this->WtcrProducts->WtcrProductCategories->find('list', ['limit' => 200]);
        
        $this->set('this_product', $wtcrProduct);
        $this->set('productVendors', $productVendors);
        $this->set('mfg_part_num', $mfg_part_num);
        $this->set('wtcrProduct', $wtcrProduct);
        $this->set('categories', $wtcrProductCategories);
        $this->set('marketplaces', $marketplaces);
        
        error_log( "DEBUG NEW PRODUCT:: <pre>" . print_r($wtcrProduct, TRUE) . "<pre>");
        // return $this->redirect(['controller' => 'wtcr_vendors', 'action' => 'view_vendor_products', 'eprom']);
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Wtcr Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrProduct = $this->WtcrProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrProduct = $this->WtcrProducts->patchEntity($wtcrProduct, $this->request->data);
            if ($this->WtcrProducts->save($wtcrProduct)) {
                $this->Flash->success('The wtcr product has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr product could not be saved. Please, try again.');
            }
        }
        $wtcrProductCategories = $this->WtcrProducts->WtcrProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('wtcrProduct', 'wtcrProductCategories'));
        $this->set('_serialize', ['wtcrProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Product id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrProduct = $this->WtcrProducts->get($id);
        if ($this->WtcrProducts->delete($wtcrProduct)) {
            $this->Flash->success('The wtcr product has been deleted.');
        } else {
            $this->Flash->error('The wtcr product could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
