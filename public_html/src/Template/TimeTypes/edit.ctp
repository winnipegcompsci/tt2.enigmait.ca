<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $timeType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $timeType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Time Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Billing Plan Lines'), ['controller' => 'BillingPlanLines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan Line'), ['controller' => 'BillingPlanLines', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['controller' => 'TicketEvents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="timeTypes form large-10 medium-9 columns">
    <?= $this->Form->create($timeType); ?>
    <fieldset>
        <legend><?= __('Edit Time Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
