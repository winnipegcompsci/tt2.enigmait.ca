<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Product Map'), ['action' => 'edit', $wtcrProductMap->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Product Map'), ['action' => 'delete', $wtcrProductMap->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProductMap->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Map'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Map'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProductMap view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrProductMap->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Wtcr Vendor') ?></h6>
            <p><?= $wtcrProductMap->has('wtcr_vendor') ? $this->Html->link($wtcrProductMap->wtcr_vendor->name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrProductMap->wtcr_vendor->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Mfg Part Num') ?></h6>
            <p><?= h($wtcrProductMap->mfg_part_num) ?></p>
            <h6 class="subheader"><?= __('Wtcrsku') ?></h6>
            <p><?= h($wtcrProductMap->wtcrsku) ?></p>
            <h6 class="subheader"><?= __('Wtcr Product Category') ?></h6>
            <p><?= $wtcrProductMap->has('wtcr_product_category') ? $this->Html->link($wtcrProductMap->wtcr_product_category->id, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrProductMap->wtcr_product_category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($wtcrProductMap->description) ?></p>
            <h6 class="subheader"><?= __('Wtcr Vendor Sku') ?></h6>
            <p><?= h($wtcrProductMap->wtcr_vendor_sku) ?></p>
            <h6 class="subheader"><?= __('Supplierstock') ?></h6>
            <p><?= h($wtcrProductMap->supplierstock) ?></p>
            <h6 class="subheader"><?= __('Suggestedprice') ?></h6>
            <p><?= h($wtcrProductMap->suggestedprice) ?></p>
            <h6 class="subheader"><?= __('Suggestedmarkup') ?></h6>
            <p><?= h($wtcrProductMap->suggestedmarkup) ?></p>
            <h6 class="subheader"><?= __('Wtcrprice') ?></h6>
            <p><?= h($wtcrProductMap->wtcrprice) ?></p>
            <h6 class="subheader"><?= __('Wtcr Nid') ?></h6>
            <p><?= h($wtcrProductMap->wtcr_nid) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrProductMap->id) ?></p>
            <h6 class="subheader"><?= __('Autoupdate') ?></h6>
            <p><?= $this->Number->format($wtcrProductMap->autoupdate) ?></p>
            <h6 class="subheader"><?= __('Createnode') ?></h6>
            <p><?= $this->Number->format($wtcrProductMap->createnode) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Lastupdated') ?></h6>
            <p><?= h($wtcrProductMap->lastupdated) ?></p>
        </div>
    </div>
</div>
