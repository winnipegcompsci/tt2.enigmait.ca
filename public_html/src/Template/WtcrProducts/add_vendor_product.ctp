<?php 
    foreach($productVendors as $item) {                
        $default_name = $item->product_name;
        $vendor_price = $item->vendor_price;
    }   
?>

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

<div class="wtcrProducts form col-lg-5 col-md-6 columns">
    <?php        
    if(count($productVendors) != 0) { ?>
    <legend> This product can be purchased from the following vendors: </legend>
    <table id="VendorTable" width="100%">
        <thead>
            <tr>
                <th> Vendor Name </th>
                <th> Product Name </th>
                <th> Vendor SKU </th>
                <th> Vendor Price </th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach($productVendors as $item) {
                echo "<tr>";
                echo "<td>" . print_r($item->wtcr_vendor->vendor_name, TRUE) . "</td>";
                echo "<td>" . $item->product_name . "</td>";
                echo "<td>" . print_r($item->wtcr_vendor_sku, TRUE) . "</td>";
                echo "<td>$" . number_format($item->vendor_price, 2) . "</td>";
                echo "</tr>";
            } ?>
        </tbody>
    </table>
<?php } 

    echo "<br /><br /><legend>" . __('This product can be sold on') . "</legend>";

    echo "<ul>";
    foreach($marketplaces as $marketplace) {
        echo "<li>" . $marketplace->marketplace_name . "</li>";
    }  
    echo "</ul>";

?>
</div>

<script>
$(document).ready( function() {
    $('#productVendorTable').dataTable( {
        "bPaginate": false
    });
});
</script>

