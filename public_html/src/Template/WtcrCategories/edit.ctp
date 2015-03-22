<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCategories form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrCategory); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Category') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('default_markup');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
