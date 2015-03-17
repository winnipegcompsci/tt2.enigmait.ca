<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Problem Types'), ['controller' => 'ProblemTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Problem Type'), ['controller' => 'ProblemTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Service Types'), ['controller' => 'ServiceTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Type'), ['controller' => 'ServiceTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Priorities'), ['controller' => 'TicketPriorities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Priority'), ['controller' => 'TicketPriorities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Statuses'), ['controller' => 'TicketStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Status'), ['controller' => 'TicketStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Sites'), ['controller' => 'CustomerSites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Site'), ['controller' => 'CustomerSites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Statuses'), ['controller' => 'BillingStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Status'), ['controller' => 'BillingStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tickets index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date_created') ?></th>
            <th><?= $this->Paginator->sort('customer_id') ?></th>
            <th><?= $this->Paginator->sort('contact_id') ?></th>
            <th><?= $this->Paginator->sort('problem_type_id') ?></th>
            <th><?= $this->Paginator->sort('service_type_id') ?></th>
            <th><?= $this->Paginator->sort('ticket_priority_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tickets as $ticket): ?>
        <tr>
            <td><?= $this->Number->format($ticket->id) ?></td>
            <td><?= h($ticket->date_created) ?></td>
            <td>
                <?= $ticket->has('customer') ? $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer->id]) : '' ?>
            </td>
            <td>
                <?= $ticket->has('contact') ? $this->Html->link($ticket->contact->id, ['controller' => 'Contacts', 'action' => 'view', $ticket->contact->id]) : '' ?>
            </td>
            <td>
                <?= $ticket->has('problem_type') ? $this->Html->link($ticket->problem_type->name, ['controller' => 'ProblemTypes', 'action' => 'view', $ticket->problem_type->id]) : '' ?>
            </td>
            <td>
                <?= $ticket->has('service_type') ? $this->Html->link($ticket->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $ticket->service_type->id]) : '' ?>
            </td>
            <td>
                <?= $ticket->has('ticket_priority') ? $this->Html->link($ticket->ticket_priority->name, ['controller' => 'TicketPriorities', 'action' => 'view', $ticket->ticket_priority->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->t_ticket_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->t_ticket_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->t_ticket_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->t_ticket_id)]) ?>
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
