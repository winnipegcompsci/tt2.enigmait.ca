<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Phone Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'PhoneNumbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'PhoneNumbers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="phoneTypes index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('order') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($phoneTypes as $phoneType): ?>
        <tr>
            <td><?= $this->Number->format($phoneType->id) ?></td>
            <td><?= h($phoneType->name) ?></td>
            <td><?= $this->Number->format($phoneType->order) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $phoneType->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $phoneType->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $phoneType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneType->id)]) ?>
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
