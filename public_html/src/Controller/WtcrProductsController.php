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
        
        $marketplaces = TableRegistry::get('WtcrMarketplaces')->find('all');
        $this->set('marketplace_list', $marketplaces);
        $this->set('product_pictures', $wtcrProduct->pictures);
        
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrProduct = $this->WtcrProducts->newEntity();
        if ($this->request->is('post')) {
            $wtcrProduct = $this->WtcrProducts->patchEntity($wtcrProduct, $this->request->data);
            if ($this->WtcrProducts->save($wtcrProduct)) {
                $this->Flash->success('The WTCR product has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The WTCR product could not be saved. Please, try again.');
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
            // echo "<pre>" . print_r($this->request, TRUE) . "</pre>";
            
            $wtcrProduct = $this->WtcrProducts->patchEntity($wtcrProduct, $this->request->data);
            debug($wtcrProduct);
            
            $wtcrProduct->createnode = 0;
            $wtcrProduct->lastupdated = date("Y-m-d H:i:s");
            $wtcrProduct->static_price = 0;
            $wtcrProduct->wtcr_nid = 0;
            $wtcrProduct->marketplace_data = serialize( array() );
            
            /*
            copy($this->request->data['picture']['tmp_name'], 
                WWW_ROOT . 'img' . DS . $this->request->data['picture']['name']
            );
            */           
            $data = unserialize($wtcrProduct->pictures);
            $data[] = array(
                'name' => $this->request->data['picture']['name'],
                'type' => $this->request->data['picture']['type'],
                'path' => WWW_ROOT . 'product_images' . DS . $this->request->data['picture']['name'],                
                'error' => $this->request->data['picture']['error'],
                'size' => $this->request->data['picture']['size']
            );
                                               
            $wtcrProduct->pictures = serialize($data);
            $wtcrProduct->wtcr_product_category = $this->request->data['wtcr_product_category_id'];    
            
            // debug($wtcrProduct);                  
            if($this->WtcrProducts->save($wtcrProduct)) {
                error_log('Successfully Saved WTCR Product');
                $this->Flash->success('The Vendor Product has been saved as a WTCR Product.');
                return $this->redirect(['controller' => 'wtcr_vendors', 'action' => 'view_vendor_products', 'eprom']);
            } else {
                error_log('Failed to add WTCR Product');
                $this->Flash->error('The Vendor Product could not be saved as a WTCR Product.');
            }
        } //end if post.        
        
        $productVendors = TableRegistry::get('wtcr_vendor_products')->find('all', [
            'conditions' => ['mfg_part_num' => $mfg_part_num],
            'contain' => ['WtcrVendors']
            
        ]);        
        
        $marketplaces = TableRegistry::get('wtcr_marketplaces')->find('all');
        $wtcrProductCategories = $this->WtcrProducts->WtcrProductCategories->find('list', ['limit' => 200]);
        
        $this_wtcr_sku = $this->getWtcrSku($mfg_part_num);
        
        $this->set('this_product', $wtcrProduct);
        $this->set('productVendors', $productVendors);
        $this->set('this_wtcr_sku', $this_wtcr_sku);
        $this->set('mfg_part_num', $mfg_part_num);
        $this->set('wtcrProduct', $wtcrProduct);
        $this->set('categories', $wtcrProductCategories);
        $this->set('marketplaces', $marketplaces);
        $this->set('pictures', $wtcrProduct->pictures);
        
        
        // error_log('About to redirect to WTCRProducts->Index');
        
        // return $this->redirect(['controller' => 'WtcrProducts', 'action' => 'index']);
    }
    
    public function getWtcrSku($mfg_part_num = null) 
    {
        if($mfg_part_num) {
            $prods = $this->WtcrProducts->find('all', [
                'conditions' => ['mfg_part_num' => $mfg_part_num]
            ]);
            
            foreach($prods as $p) {
                $wtcrSku = $p->wtcrsku;
            }
        
            if(isset($wtcrSku) &&  $wtcrSku != "") {
                return $wtcrSku;
            }
        }
        
        return $this->createNewSku($mfg_part_num);
    }
    
    public function createNewSku($mfg_part_num = null) 
    {
        if(!empty($mfg_part_num)) 
        {
            return 'WTCR-' . $mfg_part_num;
        } 
        
        return 'W-' . rand(1000, 9999) . '-' . rand(1000, 9999) . '-01'; 
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

            if(isset($this->request->data['picture']) && $this->request->data['picture']['tmp_name'] != null) {
                $data = unserialize($wtcrProduct->pictures);
                
                move_uploaded_file($_FILES['picture']['tmp_name'], WWW_ROOT . 'img' . DS . $_FILES['picture']['name']);
                /*
                copy($this->request->data['picture']['tmp_name'], 
                    WWW_ROOT . 'img' . DS . $this->request->data['picture']['name']
                );
                */
                $data[] = array(
                    'name' => $this->request->data['picture']['name'],
                    'type' => $this->request->data['picture']['type'],
                    'path' => WWW_ROOT . 'product_images' . DS . $this->request->data['picture']['name'],                
                    'error' => $this->request->data['picture']['error'],
                    'size' => $this->request->data['picture']['size']
                );
                
                               
                $wtcrProduct->pictures = serialize($data);
            }
            
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
