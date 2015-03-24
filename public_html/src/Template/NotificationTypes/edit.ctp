<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notificationType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notificationType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Notification Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Notifications'), ['controller' => 'Notifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notification'), ['controller' => 'Notifications', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="notificationTypes form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($notificationType); ?>
    <fieldset>
        <legend><?= __('Edit Notification Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('icon');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
