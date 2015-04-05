<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrVendorProduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrVendorProduct->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrVendorProducts form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrVendorProduct); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Vendor Product') ?></legend>
        <?php
            echo $this->Form->input('product_name');
            echo $this->Form->input('wtcr_vendor_id', ['options' => $wtcrVendors, 'empty' => true]);
            echo $this->Form->input('wtcr_vendor_sku');
            echo $this->Form->input('mfg_part_num');
            echo $this->Form->input('vendor_price');
            echo $this->Form->input('wtcr_product_category_id', ['options' => $wtcrProductCategories, 'empty' => true]);
            echo $this->Form->input('last_updated');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
