<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ticket Type'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="ticketTypes index col-lg-10 col-md-9 columns">
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
    <?php foreach ($ticketTypes as $ticketType): ?>
        <tr>
            <td><?= $this->Number->format($ticketType->id) ?></td>
            <td><?= h($ticketType->name) ?></td>
            <td><?= $this->Number->format($ticketType->order) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ticketType->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketType->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketType->id)]) ?>
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
