<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->t_ticket_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->t_ticket_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->t_ticket_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
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
<div class="tickets view large-10 medium-9 columns">
    <h2><?= h($ticket->t_ticket_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $ticket->has('customer') ? $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Contact') ?></h6>
            <p><?= $ticket->has('contact') ? $this->Html->link($ticket->contact->id, ['controller' => 'Contacts', 'action' => 'view', $ticket->contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Problem Type') ?></h6>
            <p><?= $ticket->has('problem_type') ? $this->Html->link($ticket->problem_type->name, ['controller' => 'ProblemTypes', 'action' => 'view', $ticket->problem_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Service Type') ?></h6>
            <p><?= $ticket->has('service_type') ? $this->Html->link($ticket->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $ticket->service_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Ticket Priority') ?></h6>
            <p><?= $ticket->has('ticket_priority') ? $this->Html->link($ticket->ticket_priority->name, ['controller' => 'TicketPriorities', 'action' => 'view', $ticket->ticket_priority->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Ticket Status') ?></h6>
            <p><?= $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'TicketStatuses', 'action' => 'view', $ticket->ticket_status->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $ticket->has('user') ? $this->Html->link($ticket->user->id, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Customer Site') ?></h6>
            <p><?= $ticket->has('customer_site') ? $this->Html->link($ticket->customer_site->id, ['controller' => 'CustomerSites', 'action' => 'view', $ticket->customer_site->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Project') ?></h6>
            <p><?= $ticket->has('project') ? $this->Html->link($ticket->project->name, ['controller' => 'Projects', 'action' => 'view', $ticket->project->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Billing Status') ?></h6>
            <p><?= $ticket->has('billing_status') ? $this->Html->link($ticket->billing_status->id, ['controller' => 'BillingStatuses', 'action' => 'view', $ticket->billing_status->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Quote') ?></h6>
            <p><?= $ticket->has('quote') ? $this->Html->link($ticket->quote->name, ['controller' => 'Quotes', 'action' => 'view', $ticket->quote->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($ticket->id) ?></p>
            <h6 class="subheader"><?= __('Completion') ?></h6>
            <p><?= $this->Number->format($ticket->completion) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($ticket->date_created) ?></p>
            <h6 class="subheader"><?= __('Dis') ?></h6>
            <p><?= h($ticket->dis) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Problem Description') ?></h6>
            <?= $this->Text->autoParagraph(h($ticket->problem_description)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Solution') ?></h6>
            <?= $this->Text->autoParagraph(h($ticket->solution)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Events') ?></h4>
    <?php if (!empty($ticket->events)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Ticket Id') ?></th>
            <th><?= __('Type Id') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th><?= __('Billing Type Id') ?></th>
            <th><?= __('Time Type Id') ?></th>
            <th><?= __('Time Taken') ?></th>
            <th><?= __('Is Resolution') ?></th>
            <th><?= __('Resolution Date') ?></th>
            <th><?= __('Time Start') ?></th>
            <th><?= __('Time End') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($ticket->events as $events): ?>
        <tr>
            <td><?= h($events->id) ?></td>
            <td><?= h($events->ticket_id) ?></td>
            <td><?= h($events->type_id) ?></td>
            <td><?= h($events->description) ?></td>
            <td><?= h($events->user_id) ?></td>
            <td><?= h($events->timestamp) ?></td>
            <td><?= h($events->billing_type_id) ?></td>
            <td><?= h($events->time_type_id) ?></td>
            <td><?= h($events->time_taken) ?></td>
            <td><?= h($events->is_resolution) ?></td>
            <td><?= h($events->resolution_date) ?></td>
            <td><?= h($events->time_start) ?></td>
            <td><?= h($events->time_end) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
