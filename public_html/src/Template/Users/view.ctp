<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($user->name) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($user->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($user->last_name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Session') ?></h6>
            <p><?= h($user->session) ?></p>
            <h6 class="subheader"><?= __('Cookie') ?></h6>
            <p><?= h($user->cookie) ?></p>
            <h6 class="subheader"><?= __('Ip') ?></h6>
            <p><?= h($user->ip) ?></p>
            <h6 class="subheader"><?= __('Company Name') ?></h6>
            <p><?= h($user->company_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= $this->Number->format($user->role) ?></p>
            <h6 class="subheader"><?= __('Customer Id') ?></h6>
            <p><?= $this->Number->format($user->customer_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('User Created') ?></h6>
            <p><?= h($user->user_created) ?></p>
            <h6 class="subheader"><?= __('Last Login') ?></h6>
            <p><?= h($user->last_login) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Secretkey') ?></h6>
            <?= $this->Text->autoParagraph(h($user->secretkey)); ?>

        </div>
    </div>
</div>
