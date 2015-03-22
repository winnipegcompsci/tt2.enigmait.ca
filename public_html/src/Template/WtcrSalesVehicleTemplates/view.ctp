<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Sales Vehicle Template'), ['action' => 'edit', $wtcrSalesVehicleTemplate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Sales Vehicle Template'), ['action' => 'delete', $wtcrSalesVehicleTemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrSalesVehicleTemplate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicle Templates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle Template'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicles'), ['controller' => 'WtcrSalesVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle'), ['controller' => 'WtcrSalesVehicles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrSalesVehicleTemplates view large-10 medium-9 columns">
    <h2><?= h($wtcrSalesVehicleTemplate->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Wtcr Sales Vehicle Id') ?></h6>
            <p><?= h($wtcrSalesVehicleTemplate->wtcr_sales_vehicle_id) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($wtcrSalesVehicleTemplate->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrSalesVehicleTemplate->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Template Data') ?></h6>
            <?= $this->Text->autoParagraph(h($wtcrSalesVehicleTemplate->template_data)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related WtcrSalesVehicles') ?></h4>
    <?php if (!empty($wtcrSalesVehicleTemplate->wtcr_sales_vehicles)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Wtcr Sales Vehicle Template Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrSalesVehicleTemplate->wtcr_sales_vehicles as $wtcrSalesVehicles): ?>
        <tr>
            <td><?= h($wtcrSalesVehicles->id) ?></td>
            <td><?= h($wtcrSalesVehicles->name) ?></td>
            <td><?= h($wtcrSalesVehicles->wtcr_sales_vehicle_template_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrSalesVehicles', 'action' => 'view', $wtcrSalesVehicles->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrSalesVehicles', 'action' => 'edit', $wtcrSalesVehicles->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrSalesVehicles', 'action' => 'delete', $wtcrSalesVehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrSalesVehicles->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
