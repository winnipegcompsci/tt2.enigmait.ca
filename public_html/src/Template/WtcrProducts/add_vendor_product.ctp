<div class="wtcrProducts form col-lg-5 col-md-6 columns pull-right">
    <?php        
    if(count($productVendors) != 0) { ?>
    <p> This product can be purchased from the following vendors: </p>
    <table id="VendorTable" width="100%">
        <thead>
            <tr>
                <th> Product Name </th>
                <th> Vendor </th>
                <th> Vendor Price </th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach($productVendors as $item) {
                echo "<tr>";
                echo "<td>" . print_r($item->wtcr_vendor->vendor_name, TRUE) . "</td>";
                echo "<td>" . $item->product_name . "</td>";
                echo "<td>" . $item->wtcr_vendor_product->wtcr_vendor_sku . "</td>";
                echo "<td>$" . number_format($item->vendor_price, 2) . "</td>";
                echo "</tr>";
                
                $default_name = $item->product_name;
                $vendor_price = $item->vendor_price;
            } ?>
        </tbody>
    </table>
<?php } 

    echo "<br /><br /><p>" . __('This product can be sold on') . "</p>";

    foreach($marketplaces as $marketplace) {
        echo "<pre>" . print_r($marketplace->marketplace_name, TRUE) . "</pre>";
    }  

?>
</div>

<div class="wtcrProducts form col-lg-5 col-md-6 columns pull-left">
    <?= $this->Form->create($wtcrProduct); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Product') ?></legend>
        <?php
            echo $this->Form->input('mfg_part_num', ['default' => $mfg_part_num]);
            echo $this->Form->input('wtcrsku');
            echo $this->Form->input('wtcr_product_name', ['default' => $default_name]);
            echo $this->Form->input('description');
            echo $this->Form->input('autoupdate', ['type' => 'checkbox']);
            echo $this->Form->input('static_price');
            echo $this->Form->input('suggestedmarkup', ['default' => '0.5']);
            echo $this->Form->input('wtcrprice', ['default' => $vendor_price * 1.5]);
            echo $this->Form->input('wtcr_nid');
            echo $this->Form->input('extra');
            echo $this->Form->input('wtcr_product_category_id', ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<script>
$(document).ready( function() {
    $('#productVendorTable').dataTable( {
        "bPaginate": false
    });
});
</script>

