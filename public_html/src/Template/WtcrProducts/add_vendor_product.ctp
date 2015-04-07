<?php if(count($productVendors) != 0) { ?>
    <table id="" width="100%">
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
                echo "<td>" . $item->product_name . "</td>";
                echo "<td>" . print_r($item->wtcr_vendor->vendor_name, TRUE) . "</td>";
                echo "<td>$" . number_format($item->vendor_price, 2) . "</td>";
                echo "</tr>";
            } ?>
        </tbody>
    </table>
<?php } ?>


<div class="wtcrProducts form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrProduct); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Product') ?></legend>
        <?php
            echo $this->Form->input('mfg_part_num', ['default' => $mfg_part_num]);
            echo $this->Form->input('wtcrsku');
            echo $this->Form->input('wtcr_product_name');
            echo $this->Form->input('description');
            echo $this->Form->input('autoupdate', ['type' => 'checkbox']);
            echo $this->Form->input('static_price');
            echo $this->Form->input('suggestedmarkup');
            echo $this->Form->input('wtcrprice');
            echo $this->Form->input('wtcr_nid');
            echo $this->Form->input('lastupdated');
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

