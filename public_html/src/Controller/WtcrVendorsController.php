<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrVendors Controller
 *
 * @property \App\Model\Table\WtcrVendorsTable $WtcrVendors
 */
class WtcrVendorsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrVendors', $this->paginate($this->WtcrVendors));
        $this->set('_serialize', ['wtcrVendors']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Vendor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrVendor = $this->WtcrVendors->get($id, [
            'contain' => ['Inventory', 'WtcrVendorProducts']
        ]);
        $this->set('wtcrVendor', $wtcrVendor);
        $this->set('_serialize', ['wtcrVendor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrVendor = $this->WtcrVendors->newEntity();
        if ($this->request->is('post')) {
            $wtcrVendor = $this->WtcrVendors->patchEntity($wtcrVendor, $this->request->data);
            if ($this->WtcrVendors->save($wtcrVendor)) {
                $this->Flash->success('The wtcr vendor has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr vendor could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrVendor'));
        $this->set('_serialize', ['wtcrVendor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Vendor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrVendor = $this->WtcrVendors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrVendor = $this->WtcrVendors->patchEntity($wtcrVendor, $this->request->data);
            if ($this->WtcrVendors->save($wtcrVendor)) {
                $this->Flash->success('The wtcr vendor has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr vendor could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrVendor'));
        $this->set('_serialize', ['wtcrVendor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Vendor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrVendor = $this->WtcrVendors->get($id);
        if ($this->WtcrVendors->delete($wtcrVendor)) {
            $this->Flash->success('The wtcr vendor has been deleted.');
        } else {
            $this->Flash->error('The wtcr vendor could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function view_vendor_products($vendor = null) 
    {
        $vendor_products = null;
        
        
        
        if($vendor == "eprom") {
            $this->set('vendor_name', 'Eprom');
        }
        
        if($vendor == "longtech") {
            $this->set('vendor_name', 'Longtech');
        }
        
        if($vendor == "asi") {
            $this->set('vendor_name', 'ASI');
        }
        
        $this->set('vendor_products', $vendor_products);
    }
    
    
    public function fetch_vendor_products($vendor = null) 
    {
        if($vendor == "eprom") {
            $this->Flash->success('Fetching EPROM Products');   // Debug
            $vendor_products = $this->fetch_eprom_products();
        }
        
        if($vendor == "longtech") {
            $this->Flash->success("Fetching Longtech Products");   // Debug
            $vendor_products = $this->fetch_longtech_products();
        }
        
        if($vendor == "asi") {
            $this->Flash->success("Fetching ASI Products"); // Debug
            $vendor_products = $this->fetch_asi_products();
        }
    }
    
    public function fetch_eprom_products() 
    {
        $this->Flash->error('Debug:: Fetching Eprom Products');
        
        
    }
    
    public function fetch_longtech_products() 
    {
        $this->Flash->error('Debug:: Fetching Longtech Products');
    }
    
    public function fetch_asi_products()
    {
        $this->Flash->error('Debug:: Fetching ASI Products');
    }
    
    
    
    
  
    
}
