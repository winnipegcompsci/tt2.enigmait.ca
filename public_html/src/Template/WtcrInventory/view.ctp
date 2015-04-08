<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Inventory'), ['action' => 'edit', $wtcrInventory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Inventory'), ['action' => 'delete', $wtcrInventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrInventory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Inventory'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Inventory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrInventory view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrInventory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Wtcr Sku') ?></h6>
            <p><?= h($wtcrInventory->wtcr_sku) ?></p>
            <h6 class="subheader"><?= __('Product Name') ?></h6>
            <p><?= h($wtcrInventory->product_name) ?></p>
            <h6 class="subheader"><?= __('Wtcr Product Category') ?></h6>
            <p><?= $wtcrInventory->has('wtcr_product_category') ? $this->Html->link($wtcrInventory->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrInventory->wtcr_product_category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Manufacturer Sku') ?></h6>
            <p><?= h($wtcrInventory->manufacturer_sku) ?></p>
            <h6 class="subheader"><?= __('Wtcr Vendor') ?></h6>
            <p><?= $wtcrInventory->has('wtcr_vendor') ? $this->Html->link($wtcrInventory->wtcr_vendor->vendor_name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrInventory->wtcr_vendor->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Vendor Sku') ?></h6>
            <p><?= h($wtcrInventory->vendor_sku) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrInventory->id) ?></p>
            <h6 class="subheader"><?= __('Wtcr Manufacturer Id') ?></h6>
            <p><?= $this->Number->format($wtcrInventory->wtcr_manufacturer_id) ?></p>
            <h6 class="subheader"><?= __('Vendor Price') ?></h6>
            <p><?= $this->Number->format($wtcrInventory->vendor_price) ?></p>
            <h6 class="subheader"><?= __('Markup') ?></h6>
            <p><?= $this->Number->format($wtcrInventory->markup) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Received Date') ?></h6>
            <p><?= h($wtcrInventory->received_date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Serial Numbers') ?></h6>
            <?= $this->Text->autoParagraph(h($wtcrInventory->serial_numbers)); ?>

        </div>
    </div>
</div>
