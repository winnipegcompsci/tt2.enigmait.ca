<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Sales Vehicle'), ['action' => 'edit', $wtcrSalesVehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Sales Vehicle'), ['action' => 'delete', $wtcrSalesVehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrSalesVehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicle Templates'), ['controller' => 'WtcrSalesVehicleTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle Template'), ['controller' => 'WtcrSalesVehicleTemplates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrSalesVehicles view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrSalesVehicle->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($wtcrSalesVehicle->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrSalesVehicle->id) ?></p>
            <h6 class="subheader"><?= __('Wtcr Sales Vehicle Template Id') ?></h6>
            <p><?= $this->Number->format($wtcrSalesVehicle->wtcr_sales_vehicle_template_id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related WtcrSalesVehicleTemplates') ?></h4>
    <?php if (!empty($wtcrSalesVehicle->wtcr_sales_vehicle_templates)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Wtcr Sales Vehicle Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Template Data') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrSalesVehicle->wtcr_sales_vehicle_templates as $wtcrSalesVehicleTemplates): ?>
        <tr>
            <td><?= h($wtcrSalesVehicleTemplates->id) ?></td>
            <td><?= h($wtcrSalesVehicleTemplates->wtcr_sales_vehicle_id) ?></td>
            <td><?= h($wtcrSalesVehicleTemplates->name) ?></td>
            <td><?= h($wtcrSalesVehicleTemplates->template_data) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrSalesVehicleTemplates', 'action' => 'view', $wtcrSalesVehicleTemplates->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrSalesVehicleTemplates', 'action' => 'edit', $wtcrSalesVehicleTemplates->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrSalesVehicleTemplates', 'action' => 'delete', $wtcrSalesVehicleTemplates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrSalesVehicleTemplates->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
