<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrProductMap->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProductMap->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Product Map'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProductMap form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrProductMap); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Product Map') ?></legend>
        <?php
            echo $this->Form->input('wtcr_vendor_id', ['options' => $wtcrVendors]);
            echo $this->Form->input('mfg_part_num');
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
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
