<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
// App::import('Vendor', 'simple_html_dom');

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
            $vendor_id = 1;	// FIX THIS
        }
        
        if($vendor == "longtech") {
            $this->set('vendor_name', 'Longtech');
            $vendor_id = 2; // FIX THIS
        }
        
        if($vendor == "asi") {
            $this->set('vendor_name', 'ASI');
            $vendor_id = 3; // FIX THIS!
        }
        
        $vendor_products = TableRegistry::get('wtcr_vendor_products')->find('all', [
            'conditions' => ['wtcr_vendor_id' => $vendor_id]
        ]);
                
        
        $this->set('vendor_products', $vendor_products);
        $this->set('vendor_id', $vendor_id);
    }
    
    
    public function fetch_vendor_products($vendor = null) 
    {
        if($vendor == "eprom") {
            $vendor_products = $this->fetch_eprom_products();
        }
        
        if($vendor == "longtech") {
            $vendor_products = $this->fetch_longtech_products();
        }
        
        if($vendor == "asi") {
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
			$numProdSaved = 0;
			
            foreach(preg_split("/((\r?\n)|(\r\n?))/", $downloaded_file) as $line) {
				// error_log('FOUND LINE: ' . $line);
                $parts = explode(",", $line, 6);
                
                if( isset($parts[0]) && !isset($parts[1]) ) {
                    $category = $parts[0];
                } else {               
                    $supplier_sku = $parts[0];
                    $description = $parts[1];
                    $stock = $parts[2];
                    $supplier_price = number_format($parts[3]*1, 2);
                    $url = $parts[4];
                }
                                
                if(isset($supplier_sku) && $supplier_sku != "" && $supplier_sku != "Item Code") {                                                         
                    
                    
                    $product = $products->newEntity();
					// error_log("Product::1::" . print_r($product, TRUE) );
                    
                    $existing_prods = $products->find()
                        ->where(['wtcr_vendor_sku' => $supplier_sku])
                        ->toArray();
                    
                    foreach($existing_prods as $prod) {
                        $product = $prod;
                    }
                    
                    
                    if(!$product) {
                        $product = $products->newEntity();
						// error_log("Product::2:: " . print_r($product, TRUE));
						
                        $product->product_name = $description;
                        $product->wtcr_vendor_id = 1;				  // Replace this with Fetched ID After.
                        $product->wtcr_vendor_sku = $supplier_sku;
                        $product->mfg_part_num = $supplier_sku;       // Create a VENDOR_SKU -> WTCR_SKU FUNC
						$product->vendor_price = $supplier_price;
                        $product->wtcr_product_category_id = 0;
                        $product->last_updated = date('Y-m-d H:i:s');
                    } else {
                        $product->product_name = $description;
                        $product->wtcr_vendor_id = 1;				 // Replace this with Fetched ID After
                        $product->wtcr_vendor_sku = $supplier_sku;
                        $product->mfg_part_num = $supplier_sku;       // Create a VENDOR_SKU -> WTCR_SKU FUNC
                        $product->vendor_price = $supplier_price;
                        $product->wtcr_product_category_id = 0;				// Options: $category.
                        $product->last_updated = date('Y-m-d H:i:s');
                    }
                    
					
					// error_log('Product::3::' . print_r($product, TRUE) );
					
                    if($products->save($product)) {
						$numProdSaved++;
					} else {
						error_log('Failed to Fetch EPROM Product');
						// echo "<pre><br />Product:: " . print_r($product, TRUE) . "</pre>";
						// echo "<pre><br />Products:: " . print_r($products, TRUE) . "</pre>";
						// die();
					}
                }
            }
                
                        
            $this->Flash->success('Updated ' . $numProdSaved . ' EPROM products in the database');
                        
                        
            return $this->redirect(['controller' => 'wtcr_vendors', 'action' => 'view_vendor_products', 'eprom']);
            
        } catch (Exception $e) {
            $this->Flash->error('Error Caught:: ' . $e->getMessage());
        }
        
    }
    
    public function fetch_longtech_products() 
    {
        ini_set('max_execution_time', 0);
        require_once('simple_html_dom.php');        // Include DOM Parsing Toolkit
     
        $username = "winnipegtechnology";
        $password = "R3E3H1";
        error_log("WinnipegTMaz_Execution_Team");
 
        $pno = array();
        $pna = array();
        $prices = array();
        $longtech_products = array();
    
        $totalNumUpdated = 0;
        $totalNumInserted = 0;
             
        $url = "http://www.longtech.ca/search/index.php?weblan=cn&page=";
        $curPage = 1;
        $lastPage = 20; // 113?
    
        $html = file_get_html($url . '1');
        
        // GETS THE TOTAL NUMBER OF PAGES OF PRODUCTS LONGTECH OFFERS
        foreach($html->find('div.page') as $pageFooter) {
            foreach($pageFooter->find('a') as $pageLink) {
                $pos = strrpos($pageLink->href, '=');
                $page = substr($pageLink->href, $pos+1);
             
                $lastPage = $page;
            }
        }
        
        $output .= "<h2>Longtech: Fetch Results</h2> (" . $url .  "1-$lastPage)... ($lastPage pages)<br />";  // DEBUG
    
        $time_start = microtime(true);
    
        $index = 0;
        while($curPage <= $lastPage) {
            $thisURL = $url . $curPage;
        
            $duration = number_format(microtime(true) - $time_start, 1);
        
            // Report Back to Drupal Var.
            $message = 'on page ' . $curPage . ' of ' . $lastPage . ' (elapsed time: ' . $duration . ' seconds)';
            update_progress($curPage, $message, number_format(($curPage/$lastPage)*100,2));
                
            error_log("GET: " . $thisURL . " out of " . $lastPage . " | " . number_format($duration, 4) . " seconds");
        
            // Login with CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $thisURL);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 'uname=' . $username . '&upass=' . $password . "&action=login_save");
            curl_setopt($ch, CURLOPT_COOKIEFILE, '/cookie.txt');
            curl_setopt($ch, CURLOPT_COOKIEJAR, '/cookie.txt');
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        
            $referer = variable_get('prodmgr_referer', 'http://google.ca');
            curl_setopt($ch, CURLOPT_REFERER, $referer);
        
            $userAgent = variable_get('prodmgr_user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
            curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);

            // Perform the Login Request///////////////////////////////////////////////////
            $login_content = curl_exec($ch);
            $login_info    = curl_getinfo($ch);
        
            $html = str_get_html($login_content);
       
            if(!empty($html)) {        
                foreach($html->find('p.pno') as $number) {
                    $pno[] = str_replace("ID:", "", $number->innertext);
                }
            
                foreach($html->find('p.pna') as $name) {
                    $pna[] = $name->innertext;
                }
            
                foreach($html->find('p.price') as $price) {
                    $prices[] = str_replace('$', '', $price->innertext);
                }
            } else {
                $output .= "html var was empty"; // DEBUG
            }
        
            $curPage++;
            $index++;
        }
        
        // DEBUG: DRAW TABLE //
        $numRows = count($pno);
        if(count($pna) > $numRows) {
            $numRows = count($pna);
        }
        if(count($prices) > $numRows) {
            $numRows = count($prices);
        }
        
        
        $index = 0;
            
        while($index < $numRows) {    
            $longtech_products[] = array($pno[$index], $pna[$index], $prices[$index]);
                    
            if(strcmp($prices[$index], "0.00") != 0) {        
                $output .= "<tr>";
                $output .= "<td>" . ($index+1) . "</td>";
                $output .= "<td>" . str_replace('ID:','', $pno[$index]) . "</td>";
                $output .= "<td>" . $pna[$index] . "</td>";
                $output .= "<td>" . $prices[$index] . "</td>";
                $output .= "</tr>";
                
                
                $status = db_merge('prodmgr_supplier_prices')
                    ->insertFields(array(
                        'supplier_id' => $longtech['supplier_id'],
                        'product_description' => $pna[$index],
                        'supplier_sku' =>  $pno[$index],
                        'supplier_price' => $prices[$index],
                        'last_updated' => date('Y-m-d H:i:s'),
                    ))
                    ->updateFields(array(
                        'supplier_price' => $prices[$index],
                        'last_updated' => date('Y-m-d H:i:s'),
                    ))
                    ->key(array('supplier_sku' => $pno[$index], 'supplier_id' => $longtech['supplier_id']))
                    ->execute();
                
                if($status == MergeQuery::STATUS_INSERT) {
                    $output .= "<br />Inserted New Item: " . $pna[$index] . " @ " . $prices[$index];
                    $totalNumInserted++;
                } else if ($status == MergeQuery::STATUS_UPDATE) {
                    $output .= "<br />Updated Existing Item: " . $pna[$index] . " @ "  . $prices[$index];
                    $totalNumUpdated++;
                }
            } else {
                // Product Price is 0.00 [Not Available]
            }
            
            // echo "<br /> <strong> Longtech Products </strong>: <pre>" . print_r($longtech_produts, TRUE ) . "</pre>";
            
            $index++;     
        }

        $output .= "<p> <h2> Operations: </h2> <br /> New Products: " . $totalNumInserted . 
            "<br /> Updated Products: " . $totalNumUpdated . "</p>"; 

        
        // $output .= '<br />' . l('Go Back to Longtech Products', $base_url . '/admin/config/prodmgr/suppliers/longtech');
               
        
           
    } /*.longtech_fetch */
}   
