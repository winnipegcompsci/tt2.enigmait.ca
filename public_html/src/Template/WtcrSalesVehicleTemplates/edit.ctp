<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrSalesVehicleTemplate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrSalesVehicleTemplate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicle Templates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicles'), ['controller' => 'WtcrSalesVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle'), ['controller' => 'WtcrSalesVehicles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrSalesVehicleTemplates form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrSalesVehicleTemplate); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Sales Vehicle Template') ?></legend>
        <?php
            echo $this->Form->input('wtcr_sales_vehicle_id');
            echo $this->Form->input('name');
            echo $this->Form->input('template_data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
