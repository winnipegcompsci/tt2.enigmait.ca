<div class="wtcrInventory view col-lg-6 col-md-9 columns">
    <h2>Inventory Item#: <?= h($wtcrInventory->mfg_part_number) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <table>
                <tr><td><h6><strong>WTCR SKU</strong></h6></td>          <td class="pull-right"><?= h($wtcrInventory->wtcr_sku) ?></td></tr>
                <tr><td><h6><strong>Product Name</strong></h6></td>      <td class="pull-right"><?= h($wtcrInventory->product_name) ?></td></tr>
                <tr><td><h6><strong>Product Category</strong></h6></td>  <td class="pull-right"><?= $wtcrInventory->has('wtcr_product_category') ? $this->Html->link($wtcrInventory->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrInventory->wtcr_product_category->id]) : '' ?></td></tr>
                <tr><td><h6><strong>Mfg. Part Number</strong></h6></td>  <td class="pull-right"><?= h($wtcrInventory->mfg_part_number) ?></td></tr>
                <tr><td><h6><strong>WTCR Vendor</strong></h6></td>       <td class="pull-right"><?= $wtcrInventory->has('wtcr_vendor') ? $this->Html->link($wtcrInventory->wtcr_vendor->vendor_name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrInventory->wtcr_vendor->id]) : '' ?></td></tr>
                <tr><td><h6><strong>Vendor SKU</strong></h6></td>        <td class="pull-right"><?= h($wtcrInventory->vendor_sku) ?></td></tr>
                <tr><td><h6><strong>Vendor Price</strong></h6></td>      <td class="pull-right"><?= $this->Number->format($wtcrInventory->vendor_price) ?> </td></tr>
                <tr><td><h6><strong>Markup %</strong></h6></td>          <td class="pull-right"><?= $this->Number->format($wtcrInventory->markup) ?> </td></tr>
                <tr><td><h6><strong>Order Details</strong></h6></td>     <td class="pull-right"><?= $this->Number->format($wtcrInventory->order_details) ?> </td></tr>
                <tr><td><h6><strong>Received Date</strong></h6></td>     <td class="pull-right"><?= h($wtcrInventory->received_date) ?></td></tr>
                <tr><td><h6><strong>Serial Number(s)</strong></h6></td>  
                    <td class="pull-right">
                        <?php 
                            $parts = explode(",", $wtcrInventory->serial_numbers);
                            
                            foreach($parts as $part) {
                                echo $part . ",<br />";
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="actions columns col-lg-5 col-md-3">
    <h3><?= __('Item Barcode:') ?></h3>
    
    <?php 
        $serials = explode(',', $wtcrInventory->serial_numbers);
        if(isset($serials[0]) && $serials[0] != "") {
            $thisSerial = $serials[0];
        } else {
            $thisSerial = $wtcrInventory->mfg_part_number;
        }
    ?>
    <div id="inventory-barcode">
        <img class="pull-right" src='/inventory_barcode.php?size=60&text=<?= $thisSerial ?>' style="border 3px solid green" alt = 'Product Barcode' width="250" >
        <br /><a class="" href='#print_barcode'>Print Barcode </a>
        <h3> ZPL Code </h3>
        <pre>
^XA
^FO50,130
^BY3^BCN,100,Y,N,N
^FDP012000793^FS
^FO50,280
^BY3^BCN,100,Y,N,N
^FDP012000794^FS
^FO50,430
^BY3^BCN,100,Y,N,N
^FDP012000795^FS
^FO50,580
^BY3^BCN,100,Y,N,N
^FD<?= $thisSerial ?>^FS
^XZ
        </pre>
    </div>
    
    
    
    <div id="inventory-image" style="padding-top: 150px" class="pull-right">
        <h4> (Inventory Image Here) </h4>
        
    </div>
    
</div>