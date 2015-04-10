<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Vendor Product'), ['action' => 'edit', $wtcrVendorProduct->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Vendor Product'), ['action' => 'delete', $wtcrVendorProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrVendorProduct->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrVendorProducts view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrVendorProduct->product_name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Product Name') ?></h6>
            <p><?= h($wtcrVendorProduct->product_name) ?></p>
            <h6 class="subheader"><?= __('Wtcr Vendor') ?></h6>
            <p><?= $wtcrVendorProduct->has('wtcr_vendor') ? $this->Html->link($wtcrVendorProduct->wtcr_vendor->vendor_name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrVendorProduct->wtcr_vendor->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Wtcr Vendor Sku') ?></h6>
            <p><?= h($wtcrVendorProduct->wtcr_vendor_sku) ?></p>
            <h6 class="subheader"><?= __('Mfg Part Num') ?></h6>
            <p><?= h($wtcrVendorProduct->mfg_part_num) ?></p>
            <h6 class="subheader"><?= __('Wtcr Product Category') ?></h6>
            <p><?= $wtcrVendorProduct->has('wtcr_product_category') ? $this->Html->link($wtcrVendorProduct->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrVendorProduct->wtcr_product_category->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrVendorProduct->id) ?></p>
            <h6 class="subheader"><?= __('Vendor Price') ?></h6>
            <p><?= $this->Number->format($wtcrVendorProduct->vendor_price) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Last Updated') ?></h6>
            <p><?= h($wtcrVendorProduct->last_updated) ?></p>
        </div>
    </div>
</div>
