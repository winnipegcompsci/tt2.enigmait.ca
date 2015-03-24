<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Customer Note'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customerNotes index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('customer_id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('timestamp') ?></th>
            <th><?= $this->Paginator->sort('permission') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($customerNotes as $customerNote): ?>
        <tr>
            <td><?= $this->Number->format($customerNote->id) ?></td>
            <td>
                <?= $customerNote->has('customer') ? $this->Html->link($customerNote->customer->name, ['controller' => 'Customers', 'action' => 'view', $customerNote->customer->id]) : '' ?>
            </td>
            <td>
                <?= $customerNote->has('user') ? $this->Html->link($customerNote->user->id, ['controller' => 'Users', 'action' => 'view', $customerNote->user->id]) : '' ?>
            </td>
            <td><?= h($customerNote->title) ?></td>
            <td><?= h($customerNote->timestamp) ?></td>
            <td><?= $this->Number->format($customerNote->permission) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $customerNote->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerNote->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerNote->id)]) ?>
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
