<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Competitors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Competitor Products'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor Product'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCompetitors form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrCompetitor); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Competitor') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('update_frequency_hours');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
