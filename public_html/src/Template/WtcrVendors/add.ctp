<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['controller' => 'WtcrVendorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['controller' => 'WtcrVendorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrVendors form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrVendor); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Vendor') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('update_freq_hours');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
