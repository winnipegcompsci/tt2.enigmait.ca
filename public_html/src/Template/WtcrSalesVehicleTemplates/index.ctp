<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle Template'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Sales Vehicles'), ['controller' => 'WtcrSalesVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Sales Vehicle'), ['controller' => 'WtcrSalesVehicles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrSalesVehicleTemplates index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('wtcr_sales_vehicle_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrSalesVehicleTemplates as $wtcrSalesVehicleTemplate): ?>
        <tr>
            <td><?= $this->Number->format($wtcrSalesVehicleTemplate->id) ?></td>
            <td><?= h($wtcrSalesVehicleTemplate->wtcr_sales_vehicle_id) ?></td>
            <td><?= h($wtcrSalesVehicleTemplate->name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrSalesVehicleTemplate->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrSalesVehicleTemplate->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrSalesVehicleTemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrSalesVehicleTemplate->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
