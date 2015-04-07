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

<?php 
/*
            [mfg_part_num] => 1
            [wtcrsku] => 1
            [wtcr_product_name] => 1
            [description] => 1
            [autoupdate] => 1
            [static_price] => 1
            [suggestedmarkup] => 1
            [wtcrprice] => 1
            [wtcr_nid] => 1
            [lastupdated] => 1
            [marketplace_data] => 1
            [pictures] => 1
            [wtcr_vendor] => 1
            [wtcr_product_category] => 1
*/


echo "<pre>" . print_r($this_product, TRUE) . "</pre>";

foreach($productVendors as $item) {
	echo "<pre>" . print_r($item, TRUE) . "</pre>";
}
?>

<div class="wtcrProducts form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrProduct); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Product') ?></legend>
        <?php
            echo $this->Form->input('wtcr_vendor_id', ['options' => $wtcrVendors]);
            echo $this->Form->input('mfg_part_num', ['default' => $mfg_part_num]);
            echo $this->Form->input('wtcrsku');
            echo $this->Form->input('description');
            echo $this->Form->input('wtcr_vendor_sku');
            echo $this->Form->input('supplierstock');
            echo $this->Form->input('autoupdate');
            echo $this->Form->input('suggestedprice');
            echo $this->Form->input('suggestedmarkup');
            echo $this->Form->input('wtcrprice');
            echo $this->Form->input('wtcr_nid');
            echo $this->Form->input('lastupdated');
            echo $this->Form->input('extra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
