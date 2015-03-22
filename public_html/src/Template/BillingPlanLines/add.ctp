<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Billing Plan Lines'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Billing Plans'), ['controller' => 'BillingPlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan'), ['controller' => 'BillingPlans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Time Types'), ['controller' => 'TimeTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time Type'), ['controller' => 'TimeTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="billingPlanLines form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($billingPlanLine); ?>
    <fieldset>
        <legend><?= __('Add Billing Plan Line') ?></legend>
        <?php
            echo $this->Form->input('billing_plan_id', ['options' => $billingPlans]);
            echo $this->Form->input('time_type_id', ['options' => $timeTypes]);
            echo $this->Form->input('minutes_per_unit');
            echo $this->Form->input('min_num_unit');
            echo $this->Form->input('min_unit');
            echo $this->Form->input('round_up_at_min');
            echo $this->Form->input('emerg_minutes_per_unit');
            echo $this->Form->input('emerg_min_num_units');
            echo $this->Form->input('emerg_min_unit');
            echo $this->Form->input('emerg_round_up_at_min');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
