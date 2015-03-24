<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $billingPlan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $billingPlan->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Billing Plans'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="billingPlans form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($billingPlan); ?>
    <fieldset>
        <legend><?= __('Edit Billing Plan') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
