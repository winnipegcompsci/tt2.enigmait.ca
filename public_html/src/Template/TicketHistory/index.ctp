<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ticket History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ticketHistory index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('ticket_id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ticketHistory as $ticketHistory): ?>
        <tr>
            <td><?= $this->Number->format($ticketHistory->id) ?></td>
            <td>
                <?= $ticketHistory->has('ticket') ? $this->Html->link($ticketHistory->ticket->t_ticket_id, ['controller' => 'Tickets', 'action' => 'view', $ticketHistory->ticket->t_ticket_id]) : '' ?>
            </td>
            <td>
                <?= $ticketHistory->has('user') ? $this->Html->link($ticketHistory->user->id, ['controller' => 'Users', 'action' => 'view', $ticketHistory->user->id]) : '' ?>
            </td>
            <td><?= h($ticketHistory->date) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ticketHistory->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketHistory->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketHistory->id)]) ?>
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
