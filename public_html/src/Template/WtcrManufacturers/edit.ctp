<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrManufacturer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrManufacturer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Manufacturers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrManufacturers form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrManufacturer); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Manufacturer') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
