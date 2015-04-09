<?php
    
    foreach($productVendors as $item) {                
        $default_name = $item->product_name;
        $vendor_price = $item->vendor_price;
    }   
?>

<div class="wtcrProducts form col-lg-6 col-md-6 columns pull-left">
    <?= $this->Form->create($this_product); ?>
    <fieldset>
        <legend><?= __('Create WTCR Product from Vendor Product') ?></legend>
        <?php
            echo $this->Form->input('mfg_part_num', ['default' => $mfg_part_num]);
            echo $this->Form->input('wtcrsku', ['default' => $this_wtcr_sku]);
            echo $this->Form->input('wtcr_product_name', ['default' => $default_name]);
            echo $this->Form->input('description');
            
            $autoupdate_opts = [
                'options' => [1 => 'Yes', 0 => 'No'], 
                'label' => 'Auto-Update WTCR Price on Vendor Price Increases'
            ];
            echo $this->Form->input('autoupdate', $autoupdate_opts);
            echo $this->Form->input('static_price', ['label' => 'Override Price on Site to: ']);
            echo $this->Form->input('suggestedmarkup', ['default' => '0.5', 'label' => 'Suggested Markup:']);
            echo $this->Form->input('wtcrprice', ['default' => $vendor_price * 1.5, 'label' => 'Suggested WTCR Price:']);
            echo $this->Form->input('wtcr_product_category_id', ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div class="wtcrProducts form col-lg-6 col-md-6 columns">
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
                <th> Last Updated </th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach($productVendors as $item) {                
                echo "<tr>";
                echo "<td>" . $item->wtcr_vendor->vendor_name . "</td>";
                echo "<td>" . $item->product_name . "</td>";
                echo "<td>" . $item->wtcr_vendor_sku . "</td>";
                echo "<td>$" . number_format($item->vendor_price, 2) . "</td>";
                echo "<td>" . $item->last_updated . "</td>";
                echo "</tr>";
            } ?>
        </tbody>
    </table>
<?php } 

    echo "<br /><br /><legend>" . __('This product can be sold on') . "</legend>";

    echo "<ul>";
    foreach($marketplaces as $marketplace) {
        echo "<li>" . $this->Html->link($marketplace->marketplace_name, ['controller' => 'WtcrMarketplaces', 'action' => 'view', $marketplace->id]) . "</li>";
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

