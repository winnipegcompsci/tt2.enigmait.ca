<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Billing Plan'), ['action' => 'edit', $billingPlan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Billing Plan'), ['action' => 'delete', $billingPlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingPlan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Billing Plans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="billingPlans view col-lg-10 col-md-9 columns">
    <h2><?= h($billingPlan->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($billingPlan->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($billingPlan->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Customers') ?></h4>
    <?php if (!empty($billingPlan->customers)): ?>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Address Id') ?></th>
            <th><?= __('Contact Id') ?></th>
            <th><?= __('Number') ?></th>
            <th><?= __('Disabled') ?></th>
            <th><?= __('Billing Plan Id') ?></th>
            <th><?= __('Customer Notes Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($billingPlan->customers as $customers): ?>
        <tr>
            <td><?= h($customers->id) ?></td>
            <td><?= h($customers->name) ?></td>
            <td><?= h($customers->address_id) ?></td>
            <td><?= h($customers->contact_id) ?></td>
            <td><?= h($customers->number) ?></td>
            <td><?= h($customers->disabled) ?></td>
            <td><?= h($customers->billing_plan_id) ?></td>
            <td><?= h($customers->customer_notes_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
