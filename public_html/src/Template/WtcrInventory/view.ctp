<div class="wtcrInventory view col-lg-6 col-md-9 columns">
    <h2>Inventory Item#: <?= h($wtcrInventory->mfg_part_number) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <table>
                <tr><td><h6>WTCR SKU</h6></td>          <td><?= h($wtcrInventory->wtcr_sku) ?></td></tr>
                <tr><td><h6>Product Name</h6></td>      <td><?= h($wtcrInventory->product_name) ?></td></tr>
                <tr><td><h6>Product Category</h6></td>  <td><?= $wtcrInventory->has('wtcr_product_category') ? $this->Html->link($wtcrInventory->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrInventory->wtcr_product_category->id]) : '' ?></td></tr>
                <tr><td><h6>Mfg. Part Number</h6></td>  <td><?= h($wtcrInventory->mfg_part_number) ?></td></tr>
                <tr><td><h6>WTCR Vendor</h6></td>       <td><?= $wtcrInventory->has('wtcr_vendor') ? $this->Html->link($wtcrInventory->wtcr_vendor->vendor_name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrInventory->wtcr_vendor->id]) : '' ?></td></tr>
                <tr><td><h6>Vendor SKU</h6></td>        <td><?= h($wtcrInventory->vendor_sku) ?></td></tr>
                <tr><td><h6>Vendor Price</h6></td>      <td><?= $this->Number->format($wtcrInventory->vendor_price) ?> </td></tr>
                <tr><td><h6>Markup %</h6></td>          <td><?= $this->Number->format($wtcrInventory->markup) ?> </td></tr>
                <tr><td><h6>Order Details</h6></td>     <td><?= $this->Number->format($wtcrInventory->order_details) ?> </td></tr>
                <tr><td><h6>Received Date</h6></td>     <td><?= h($wtcrInventory->received_date) ?></td></tr>
                <tr><td><h6>Serial Number(s)</h6></td>  <td><?= $this->Text->autoParagraph(h($wtcrInventory->serial_numbers)); ?></td></tr>
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