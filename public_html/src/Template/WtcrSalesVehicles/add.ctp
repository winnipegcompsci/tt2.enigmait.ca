<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicle Templates'), ['controller' => 'WtcrSalesVehicleTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle Template'), ['controller' => 'WtcrSalesVehicleTemplates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrSalesVehicles form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrSalesVehicle); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Sales Vehicle') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('wtcr_sales_vehicle_template_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
