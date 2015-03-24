<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Inventory'), ['action' => 'edit', $inventory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inventory'), ['action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inventory'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Categories'), ['controller' => 'WtcrCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Category'), ['controller' => 'WtcrCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Manufacturers'), ['controller' => 'WtcrManufacturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Manufacturer'), ['controller' => 'WtcrManufacturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="inventory view col-lg-10 col-md-9 columns">
    <h2><?= h($inventory->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Wtcr Sku') ?></h6>
            <p><?= h($inventory->wtcr_sku) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($inventory->name) ?></p>
            <h6 class="subheader"><?= __('Wtcr Category') ?></h6>
            <p><?= $inventory->has('wtcr_category') ? $this->Html->link($inventory->wtcr_category->name, ['controller' => 'WtcrCategories', 'action' => 'view', $inventory->wtcr_category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Wtcr Manufacturer') ?></h6>
            <p><?= $inventory->has('wtcr_manufacturer') ? $this->Html->link($inventory->wtcr_manufacturer->name, ['controller' => 'WtcrManufacturers', 'action' => 'view', $inventory->wtcr_manufacturer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Manufacturer Sku') ?></h6>
            <p><?= h($inventory->manufacturer_sku) ?></p>
            <h6 class="subheader"><?= __('Wtcr Vendor') ?></h6>
            <p><?= $inventory->has('wtcr_vendor') ? $this->Html->link($inventory->wtcr_vendor->name, ['controller' => 'WtcrVendors', 'action' => 'view', $inventory->wtcr_vendor->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Vendor Sku') ?></h6>
            <p><?= h($inventory->vendor_sku) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($inventory->id) ?></p>
            <h6 class="subheader"><?= __('Vendor Price') ?></h6>
            <p><?= $this->Number->format($inventory->vendor_price) ?></p>
            <h6 class="subheader"><?= __('Markup') ?></h6>
            <p><?= $this->Number->format($inventory->markup) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Received Date') ?></h6>
            <p><?= h($inventory->received_date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Serial Numbers') ?></h6>
            <?= $this->Text->autoParagraph(h($inventory->serial_numbers)); ?>

        </div>
    </div>
</div>
