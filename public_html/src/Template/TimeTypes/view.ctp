<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Time Type'), ['action' => 'edit', $timeType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Time Type'), ['action' => 'delete', $timeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Time Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Plan Lines'), ['controller' => 'BillingPlanLines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan Line'), ['controller' => 'BillingPlanLines', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['controller' => 'TicketEvents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="timeTypes view col-lg-10 col-md-9 columns">
    <h2><?= h($timeType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($timeType->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($timeType->id) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($timeType->order) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related BillingPlanLines') ?></h4>
    <?php if (!empty($timeType->billing_plan_lines)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Billing Plan Id') ?></th>
            <th><?= __('Time Type Id') ?></th>
            <th><?= __('Minutes Per Unit') ?></th>
            <th><?= __('Min Num Unit') ?></th>
            <th><?= __('Min Unit') ?></th>
            <th><?= __('Round Up At Min') ?></th>
            <th><?= __('Emerg Minutes Per Unit') ?></th>
            <th><?= __('Emerg Min Num Units') ?></th>
            <th><?= __('Emerg Min Unit') ?></th>
            <th><?= __('Emerg Round Up At Min') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($timeType->billing_plan_lines as $billingPlanLines): ?>
        <tr>
            <td><?= h($billingPlanLines->id) ?></td>
            <td><?= h($billingPlanLines->billing_plan_id) ?></td>
            <td><?= h($billingPlanLines->time_type_id) ?></td>
            <td><?= h($billingPlanLines->minutes_per_unit) ?></td>
            <td><?= h($billingPlanLines->min_num_unit) ?></td>
            <td><?= h($billingPlanLines->min_unit) ?></td>
            <td><?= h($billingPlanLines->round_up_at_min) ?></td>
            <td><?= h($billingPlanLines->emerg_minutes_per_unit) ?></td>
            <td><?= h($billingPlanLines->emerg_min_num_units) ?></td>
            <td><?= h($billingPlanLines->emerg_min_unit) ?></td>
            <td><?= h($billingPlanLines->emerg_round_up_at_min) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'BillingPlanLines', 'action' => 'view', $billingPlanLines->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'BillingPlanLines', 'action' => 'edit', $billingPlanLines->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BillingPlanLines', 'action' => 'delete', $billingPlanLines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingPlanLines->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related TicketEvents') ?></h4>
    <?php if (!empty($timeType->ticket_events)): ?>
    <table cellpadding="0" cellspacing="0">
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
            <th><?= __('Is Resolution') ?></th>
            <th><?= __('Resolution Date') ?></th>
            <th><?= __('Time Start') ?></th>
            <th><?= __('Time End') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($timeType->ticket_events as $ticketEvents): ?>
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
            <td><?= h($ticketEvents->is_resolution) ?></td>
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
