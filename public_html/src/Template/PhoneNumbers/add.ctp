<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Phone Numbers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Phone Types'), ['controller' => 'PhoneTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Type'), ['controller' => 'PhoneTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="phoneNumbers form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($phoneNumber); ?>
    <fieldset>
        <legend><?= __('Add Phone Number') ?></legend>
        <?php
            echo $this->Form->input('address_id', ['options' => $addresses]);
            echo $this->Form->input('phone_number');
            echo $this->Form->input('ext');
            echo $this->Form->input('phone_type_id', ['options' => $phoneTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
