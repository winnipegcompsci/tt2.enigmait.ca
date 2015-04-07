<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>

<?php if(count($productVendors) != 0) { ?>
    <table id="productVendorTable">
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
                echo "<td>" . $item->wtcr_vendor_id . "</td>";
                echo "<td>" . number_format($item->vendor_price, 2) . "</td>";
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
            echo $this->Form->input('autoupdate');
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

