<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticketPriority->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketPriority->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticket Priorities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ticketPriorities form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($ticketPriority); ?>
    <fieldset>
        <legend><?= __('Edit Ticket Priority') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
