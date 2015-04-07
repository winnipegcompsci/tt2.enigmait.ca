<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProducts form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrProduct); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Product') ?></legend>
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
            echo $this->Form->input('extra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
