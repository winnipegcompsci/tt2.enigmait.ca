<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Inventory'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Categories'), ['controller' => 'WtcrCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Category'), ['controller' => 'WtcrCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Manufacturers'), ['controller' => 'WtcrManufacturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Manufacturer'), ['controller' => 'WtcrManufacturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="inventory form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($inventory); ?>
    <fieldset>
        <legend><?= __('Add Inventory') ?></legend>
        <?php
            echo $this->Form->input('wtcr_sku');
            echo $this->Form->input('name');
            echo $this->Form->input('wtcr_category_id', ['options' => $wtcrCategories, 'empty' => true]);
            echo $this->Form->input('wtcr_manufacturer_id', ['options' => $wtcrManufacturers, 'empty' => true]);
            echo $this->Form->input('manufacturer_sku');
            echo $this->Form->input('wtcr_vendor_id', ['options' => $wtcrVendors, 'empty' => true]);
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
