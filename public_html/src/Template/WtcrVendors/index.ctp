<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['controller' => 'WtcrVendorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['controller' => 'WtcrVendorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrVendors index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('update_freq_hours') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrVendors as $wtcrVendor): ?>
        <tr>
            <td><?= $this->Number->format($wtcrVendor->id) ?></td>
            <td><?= h($wtcrVendor->name) ?></td>
            <td><?= $this->Number->format($wtcrVendor->update_freq_hours) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrVendor->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrVendor->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrVendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrVendor->id)]) ?>
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
