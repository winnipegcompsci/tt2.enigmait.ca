<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Notes'), ['controller' => 'CustomerNotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Note'), ['controller' => 'CustomerNotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets History'), ['controller' => 'TicketsHistory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tickets History'), ['controller' => 'TicketsHistory', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($user->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($user->last_name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Session') ?></h6>
            <p><?= h($user->session) ?></p>
            <h6 class="subheader"><?= __('Cookie') ?></h6>
            <p><?= h($user->cookie) ?></p>
            <h6 class="subheader"><?= __('Ip') ?></h6>
            <p><?= h($user->ip) ?></p>
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $user->has('customer') ? $this->Html->link($user->customer->name, ['controller' => 'Customers', 'action' => 'view', $user->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Company Name') ?></h6>
            <p><?= h($user->company_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= $this->Number->format($user->role) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('User Created') ?></h6>
            <p><?= h($user->user_created) ?></p>
            <h6 class="subheader"><?= __('Last Login') ?></h6>
            <p><?= h($user->last_login) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Secretkey') ?></h6>
            <?= $this->Text->autoParagraph(h($user->secretkey)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related CustomerNotes') ?></h4>
    <?php if (!empty($user->customer_notes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Text') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th><?= __('Permission') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->customer_notes as $customerNotes): ?>
        <tr>
            <td><?= h($customerNotes->id) ?></td>
            <td><?= h($customerNotes->customer_id) ?></td>
            <td><?= h($customerNotes->user_id) ?></td>
            <td><?= h($customerNotes->title) ?></td>
            <td><?= h($customerNotes->text) ?></td>
            <td><?= h($customerNotes->timestamp) ?></td>
            <td><?= h($customerNotes->permission) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CustomerNotes', 'action' => 'view', $customerNotes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerNotes', 'action' => 'edit', $customerNotes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerNotes', 'action' => 'delete', $customerNotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerNotes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Events') ?></h4>
    <?php if (!empty($user->events)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Ticket Id') ?></th>
            <th><?= __('Event Type Id') ?></th>
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
        <?php foreach ($user->events as $events): ?>
        <tr>
            <td><?= h($events->id) ?></td>
            <td><?= h($events->ticket_id) ?></td>
            <td><?= h($events->event_type_id) ?></td>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Tickets') ?></h4>
    <?php if (!empty($user->tickets)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Contact Id') ?></th>
            <th><?= __('Problem Type Id') ?></th>
            <th><?= __('Service Type Id') ?></th>
            <th><?= __('Ticket Priority Id') ?></th>
            <th><?= __('Problem Description') ?></th>
            <th><?= __('Solution') ?></th>
            <th><?= __('Ticket Status Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Dis') ?></th>
            <th><?= __('Customer Site Id') ?></th>
            <th><?= __('Project Id') ?></th>
            <th><?= __('Completion') ?></th>
            <th><?= __('Billing Status Id') ?></th>
            <th><?= __('Quote Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->tickets as $tickets): ?>
        <tr>
            <td><?= h($tickets->id) ?></td>
            <td><?= h($tickets->date_created) ?></td>
            <td><?= h($tickets->customer_id) ?></td>
            <td><?= h($tickets->contact_id) ?></td>
            <td><?= h($tickets->problem_type_id) ?></td>
            <td><?= h($tickets->service_type_id) ?></td>
            <td><?= h($tickets->ticket_priority_id) ?></td>
            <td><?= h($tickets->problem_description) ?></td>
            <td><?= h($tickets->solution) ?></td>
            <td><?= h($tickets->ticket_status_id) ?></td>
            <td><?= h($tickets->user_id) ?></td>
            <td><?= h($tickets->dis) ?></td>
            <td><?= h($tickets->customer_site_id) ?></td>
            <td><?= h($tickets->project_id) ?></td>
            <td><?= h($tickets->completion) ?></td>
            <td><?= h($tickets->billing_status_id) ?></td>
            <td><?= h($tickets->quote_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->t_ticket_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->t_ticket_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->t_ticket_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->t_ticket_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related TicketsHistory') ?></h4>
    <?php if (!empty($user->tickets_history)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Ticket Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Action') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->tickets_history as $ticketsHistory): ?>
        <tr>
            <td><?= h($ticketsHistory->id) ?></td>
            <td><?= h($ticketsHistory->ticket_id) ?></td>
            <td><?= h($ticketsHistory->user_id) ?></td>
            <td><?= h($ticketsHistory->date) ?></td>
            <td><?= h($ticketsHistory->action) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'TicketsHistory', 'action' => 'view', $ticketsHistory->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'TicketsHistory', 'action' => 'edit', $ticketsHistory->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TicketsHistory', 'action' => 'delete', $ticketsHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketsHistory->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
