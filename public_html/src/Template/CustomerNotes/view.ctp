<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Customer Note'), ['action' => 'edit', $customerNote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Note'), ['action' => 'delete', $customerNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerNote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Notes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Note'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customerNotes view col-lg-10 col-md-9 columns">
    <h2><?= h($customerNote->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $customerNote->has('customer') ? $this->Html->link($customerNote->customer->name, ['controller' => 'Customers', 'action' => 'view', $customerNote->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $customerNote->has('user') ? $this->Html->link($customerNote->user->id, ['controller' => 'Users', 'action' => 'view', $customerNote->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($customerNote->title) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($customerNote->id) ?></p>
            <h6 class="subheader"><?= __('Permission') ?></h6>
            <p><?= $this->Number->format($customerNote->permission) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($customerNote->timestamp) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Text') ?></h6>
            <?= $this->Text->autoParagraph(h($customerNote->text)); ?>

        </div>
    </div>
</div>
