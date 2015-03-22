<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicle Templates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicles'), ['controller' => 'WtcrSalesVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle'), ['controller' => 'WtcrSalesVehicles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrSalesVehicleTemplates form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrSalesVehicleTemplate); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Sales Vehicle Template') ?></legend>
        <?php
            echo $this->Form->input('wtcr_sales_vehicle_id');
            echo $this->Form->input('name');
            echo $this->Form->input('template_data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
