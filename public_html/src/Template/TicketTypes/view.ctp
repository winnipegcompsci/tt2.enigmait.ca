<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ticket Type'), ['action' => 'edit', $ticketType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket Type'), ['action' => 'delete', $ticketType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Type'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ticketTypes view large-10 medium-9 columns">
    <h2><?= h($ticketType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($ticketType->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($ticketType->id) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($ticketType->order) ?></p>
        </div>
    </div>
</div>
