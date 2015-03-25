<div class="tickets view col-lg-10 col-md-9 columns">
    <h2><?= h($ticket->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $ticket->has('customer') ? $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Contact') ?></h6>
            <p><?= $ticket->has('contact') ? $this->Html->link($ticket->contact->id, ['controller' => 'Contacts', 'action' => 'view', $ticket->contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Ticket Type') ?></h6>
            <p><?= $ticket->has('ticket_type') ? $this->Html->link($ticket->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $ticket->ticket_type->id]) : '' ?></p>
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
    <h4 class="subheader"><?= __('Ticket Events') ?></h4>
    <?php if (!empty($ticket->ticket_events)): ?>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Ticket Id') ?></th>
            <th><?= __('Ticket Event Type Id') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th><?= __('Billing Type Id') ?></th>
            <th><?= __('Time Type Id') ?></th>
            <th><?= __('Time Taken') ?></th>
            <th><?= __('Resolution Date') ?></th>
            <th><?= __('Time Start') ?></th>
            <th><?= __('Time End') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($ticket->ticket_events as $ticketEvents): ?>
        <tr>
            <td><?= h($ticketEvents->id) ?></td>
            <td><?= h($ticketEvents->ticket_id) ?></td>
            <td><?= h($ticketEvents->ticket_event_type_id) ?></td>
            <td><?= h($ticketEvents->description) ?></td>
            <td><?= h($ticketEvents->user_id) ?></td>
            <td><?= h($ticketEvents->timestamp) ?></td>
            <td><?= h($ticketEvents->billing_type_id) ?></td>
            <td><?= h($ticketEvents->time_type_id) ?></td>
            <td><?= h($ticketEvents->time_taken) ?></td>
            <td><?= h($ticketEvents->resolution_date) ?></td>
            <td><?= h($ticketEvents->time_start) ?></td>
            <td><?= h($ticketEvents->time_end) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'TicketEvents', 'action' => 'view', $ticketEvents->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'TicketEvents', 'action' => 'edit', $ticketEvents->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TicketEvents', 'action' => 'delete', $ticketEvents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketEvents->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
