<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user); ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('password');
            echo $this->Form->input('secretkey');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('email');
            echo $this->Form->input('role');
            echo $this->Form->input('user_created');
            echo $this->Form->input('session');
            echo $this->Form->input('cookie');
            echo $this->Form->input('ip');
            echo $this->Form->input('last_login');
            echo $this->Form->input('customer_id');
            echo $this->Form->input('company_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
