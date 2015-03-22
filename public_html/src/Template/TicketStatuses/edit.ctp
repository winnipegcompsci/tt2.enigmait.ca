<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticketStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketStatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticket Statuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ticketStatuses form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($ticketStatus); ?>
    <fieldset>
        <legend><?= __('Edit Ticket Status') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
