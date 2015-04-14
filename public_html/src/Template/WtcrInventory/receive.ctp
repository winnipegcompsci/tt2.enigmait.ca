<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Inventory'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrInventory form col-lg-10 col-md-9 columns">
    <?php 
        
    ?>
    <?= $this->Form->create($wtcrInventory); ?>
    <fieldset>
        
        <legend><?= __('Add Wtcr Inventory') ?></legend>
        <?php
            echo $this->Form->input('wtcr_sku', ['default' => $thisProduct->wtcrsku]);
            echo $this->Form->input('product_name', ['default' => $thisProduct->wtcr_product_name]);
            echo $this->Form->input('wtcr_product_category_id', [
                'options' => $wtcrProductCategories,
                'default' => $thisProduct->wtcr_product_category_id,
            ]);
            echo $this->Form->input('mfg_part_number', ['default' => $thisProduct->mfg_part_num]);
            echo $this->Form->input('wtcr_vendor_id', ['options' => $wtcrVendors]);
            echo $this->Form->input('vendor_sku');
            echo $this->Form->input('vendor_price');
            echo $this->Form->input('received_date');
            echo $this->Form->input('markup');
            echo $this->Form->input('serial_numbers');
            echo $this->Form->input('order_details');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
