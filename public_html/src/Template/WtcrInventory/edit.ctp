<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrInventory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrInventory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Inventory'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrInventory form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrInventory); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Inventory') ?></legend>
        <?php
            echo $this->Form->input('wtcr_sku');
            echo $this->Form->input('product_name');
            echo $this->Form->input('wtcr_product_category_id', ['options' => $wtcrProductCategories]);
            echo $this->Form->input('wtcr_manufacturer_id');
            echo $this->Form->input('manufacturer_sku');
            echo $this->Form->input('wtcr_vendor_id', ['options' => $wtcrVendors]);
            echo $this->Form->input('vendor_sku');
            echo $this->Form->input('vendor_price');
            echo $this->Form->input('received_date');
            echo $this->Form->input('markup');
            echo $this->Form->input('serial_numbers');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
