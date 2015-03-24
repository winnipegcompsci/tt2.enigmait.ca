<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticketEventType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketEventType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticket Event Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['controller' => 'TicketEvents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ticketEventTypes form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($ticketEventType); ?>
    <fieldset>
        <legend><?= __('Edit Ticket Event Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
