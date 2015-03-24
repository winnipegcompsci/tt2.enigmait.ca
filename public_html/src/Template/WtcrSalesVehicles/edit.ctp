<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrSalesVehicle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrSalesVehicle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicle Templates'), ['controller' => 'WtcrSalesVehicleTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle Template'), ['controller' => 'WtcrSalesVehicleTemplates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrSalesVehicles form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrSalesVehicle); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Sales Vehicle') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('wtcr_sales_vehicle_template_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
