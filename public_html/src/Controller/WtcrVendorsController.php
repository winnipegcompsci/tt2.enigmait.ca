<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
        $vendorID = TableRegistry::get('wtcr_vendors')->findByName('EPROM');
        // echo "Vendor ID: <pre>" . print_r($vendorID, TRUE) . "</pre>";
        
        $write_path = getcwd() . '/vendordata/eprom.csv';
                
        // Credentials 
        $username     = "w210";
        $password     = "Cyp4mybjX3Tt";
        $login_url    = "http://www.eprom.com/home/customer/login/index.php?url=/home/customer/product/download.php";
        $download_url = "http://www.eprom.com/home/customer/product/download.php";
        
        // Get CSV File
        try {
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL, $login_url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 'login=' . $username . '&password=' . $password . '&isSubmitted=1&submit=Submit');
            curl_setopt($ch, CURLOPT_COOKIEFILE, '/cookie.txt');
            curl_setopt($ch, CURLOPT_COOKIEJAR, '/cookie.txt');
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
             
            $referer = 'http://google.ca';
            $userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
            
            curl_setopt($ch, CURLOPT_REFERER, $referer);
            curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
              
            // Perform the Login Request///////////////////////////////////////////////////
            curl_setopt($ch, CURLOPT_URL, $login_url);
            $login_content = curl_exec($ch);
            $login_info    = curl_getinfo($ch);
              
            //Perform the Download Request/////////////////////////////////////////////////
            curl_setopt($ch, CURLOPT_URL, $download_url);
            $downloaded_file = curl_exec($ch);
            $download_info   = curl_getinfo($ch);
            
            file_put_contents($write_path, $downloaded_file);
            
            $category = "";
            $products = TableRegistry::get('wtcr_vendor_products');
                                
            foreach(preg_split("/((\r?\n)|(\r\n?))/", $downloaded_file) as $line) {               
                $parts = explode(",", $line, 6);
                
                if( isset($parts[0]) && !isset($parts[1]) ) {
                    $category = $parts[0];
                } else {               
                    $supplier_sku = $parts[0];
                    $description = $parts[1];
                    $stock = $parts[2];
                    $supplier_price = number_format($parts[3], 2);
                    $url = $parts[4];
                }
                                
                if(isset($supplier_sku) && $supplier_sku != "") {                                                         
                                          
                    $product = $products->newEntity($this->request->data());
                    
                    $product->name = $description;
                    $product->wtcr_vendor_id = 'EPROM';
                    $product->vendor_sku = $supplier_sku;
                    $product->wtcr_sku = 'WTCR-' . $supplier_sku;
                    $product->vendor_price = $supplier_price
                    $product->wtcr_category_id = $category;
                    $product->last_updated = date('Y-m-d H:i:s');
                    
                    echo "<br />Product:: <pre>" . print_r($product, TRUE) . "</pre>";
                    
                                        
                    if($products->save($product)) {
                        echo "<br />DEBUG:: Saved Product $supplier_sku";
                    } else {
                        echo "<br />Could Not Save Vendor Product: $supplier_sku";
                    }
                }
                
            }
            
        } catch (Exception $e) {
            $this->Flash->error('Error Caught:: ' . $e->getMessage());
        }
        
        
        /*
            For Each Product in CSV:
                Update Corresponding Entry in DB Where Supplier = "eprom" AND
                    supplier_sku = "eprom product sku".
        */
        
        
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
