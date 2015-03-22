<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrVendor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrVendor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['controller' => 'WtcrVendorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['controller' => 'WtcrVendorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrVendors form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrVendor); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Vendor') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('update_freq_hours');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
