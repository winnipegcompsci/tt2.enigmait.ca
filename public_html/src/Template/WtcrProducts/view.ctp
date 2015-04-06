<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Product'), ['action' => 'edit', $wtcrProduct->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Product'), ['action' => 'delete', $wtcrProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProduct->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProducts view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrProduct->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Wtcr Vendor') ?></h6>
            <p><?= $wtcrProduct->has('wtcr_vendor') ? $this->Html->link($wtcrProduct->wtcr_vendor->name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrProduct->wtcr_vendor->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Mfg Part Num') ?></h6>
            <p><?= h($wtcrProduct->mfg_part_num) ?></p>
            <h6 class="subheader"><?= __('Wtcrsku') ?></h6>
            <p><?= h($wtcrProduct->wtcrsku) ?></p>
            <h6 class="subheader"><?= __('Wtcr Product Category') ?></h6>
            <p><?= $wtcrProduct->has('wtcr_product_category') ? $this->Html->link($wtcrProduct->wtcr_product_category->id, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrProduct->wtcr_product_category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($wtcrProduct->description) ?></p>
            <h6 class="subheader"><?= __('Wtcr Vendor Sku') ?></h6>
            <p><?= h($wtcrProduct->wtcr_vendor_sku) ?></p>
            <h6 class="subheader"><?= __('Supplierstock') ?></h6>
            <p><?= h($wtcrProduct->supplierstock) ?></p>
            <h6 class="subheader"><?= __('Suggestedprice') ?></h6>
            <p><?= h($wtcrProduct->suggestedprice) ?></p>
            <h6 class="subheader"><?= __('Suggestedmarkup') ?></h6>
            <p><?= h($wtcrProduct->suggestedmarkup) ?></p>
            <h6 class="subheader"><?= __('Wtcrprice') ?></h6>
            <p><?= h($wtcrProduct->wtcrprice) ?></p>
            <h6 class="subheader"><?= __('Wtcr Nid') ?></h6>
            <p><?= h($wtcrProduct->wtcr_nid) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrProduct->id) ?></p>
            <h6 class="subheader"><?= __('Autoupdate') ?></h6>
            <p><?= $this->Number->format($wtcrProduct->autoupdate) ?></p>
            <h6 class="subheader"><?= __('Createnode') ?></h6>
            <p><?= $this->Number->format($wtcrProduct->createnode) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Lastupdated') ?></h6>
            <p><?= h($wtcrProduct->lastupdated) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Extra') ?></h6>
            <?= $this->Text->autoParagraph(h($wtcrProduct->extra)); ?>

        </div>
    </div>
</div>
