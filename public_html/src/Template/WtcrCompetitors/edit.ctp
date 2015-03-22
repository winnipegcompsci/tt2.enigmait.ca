<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrCompetitor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCompetitor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Competitors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Competitor Products'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor Product'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCompetitors form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrCompetitor); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Competitor') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('update_frequency_hours');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
