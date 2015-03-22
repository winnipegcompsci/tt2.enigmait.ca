<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $billingStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $billingStatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Billing Statuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="billingStatuses form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($billingStatus); ?>
    <fieldset>
        <legend><?= __('Edit Billing Status') ?></legend>
        <?php
            echo $this->Form->input('billing_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
