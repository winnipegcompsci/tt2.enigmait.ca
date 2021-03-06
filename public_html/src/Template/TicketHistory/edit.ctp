<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticketHistory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketHistory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticket History'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ticketHistory form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($ticketHistory); ?>
    <fieldset>
        <legend><?= __('Edit Ticket History') ?></legend>
        <?php
            echo $this->Form->input('ticket_id', ['options' => $tickets]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('date');
            echo $this->Form->input('action');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
