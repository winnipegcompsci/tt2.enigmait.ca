<div class="wtcrInventory view col-lg-6 col-md-9 columns">
    <h2>Inventory Item#: <?= h($wtcrInventory->mfg_part_number) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><strong><?= __('Wtcr Sku') ?></strong></h6>
            <p><?= h($wtcrInventory->wtcr_sku) ?></p>
            <h6 class="subheader"><?= __('Product Name') ?></h6>
            <p><?= h($wtcrInventory->product_name) ?></p>
            <h6 class="subheader"><?= __('Wtcr Product Category') ?></h6>
            <p><?= $wtcrInventory->has('wtcr_product_category') ? $this->Html->link($wtcrInventory->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrInventory->wtcr_product_category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Mfg Part Number') ?></h6>
            <p><?= h($wtcrInventory->mfg_part_number) ?></p>
            <h6  class="subheader"><?= __('Wtcr Vendor') ?></h6>
            <p><?= $wtcrInventory->has('wtcr_vendor') ? $this->Html->link($wtcrInventory->wtcr_vendor->vendor_name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrInventory->wtcr_vendor->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Vendor Sku') ?></h6>
            <p style="display: inline"><?= h($wtcrInventory->vendor_sku) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrInventory->id) ?></p>
            <h6 class="subheader"><?= __('Vendor Price') ?></h6>
            <p><?= $this->Number->format($wtcrInventory->vendor_price) ?></p>
            <h6 class="subheader"><?= __('Markup') ?></h6>
            <p><?= $this->Number->format($wtcrInventory->markup) ?></p>
            <h6 class="subheader"><?= __('Order Details') ?></h6>
            <p><?= $this->Number->format($wtcrInventory->order_details) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Received Date') ?></h6>
            <p><?= h($wtcrInventory->received_date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Serial Numbers') ?></h6>
            <?= $this->Text->autoParagraph(h($wtcrInventory->serial_numbers)); ?>

        </div>
    </div>
</div>

<div class="actions columns col-lg-5 col-md-3">
    <h3><?= __('Item Barcode:') ?></h3>
    
    <?php 
        echo "<pre>" . print_r($wtcrInventory->serial_numbers, TRUE) . "</pre>"; 
        $serials = explode(',', $wtcrInventory->serial_numbers);
        if(isset($serials[0]) && $serials[0] != "") {
            $thisSerial = $serials[0];
        } else {
            $thisSerial = $wtcrInventory->mfg_part_number;
        }
        
    ?>
    
    
    
    <div id="ivnentory-barcode" src='Generateing Inventory Item Barcode'>
        <img src='/inventory_barcode.php?size=60&text=<?= $thisSerial ?>' style="border 3px solid green" alt = 'Product Barcode' width="250" >
        <a class="pull-right" href='#print_barcode'>Print Barcode </a>
    </div>
    
</div>