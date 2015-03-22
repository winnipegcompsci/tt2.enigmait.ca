<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Competitor Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Competitors'), ['controller' => 'WtcrCompetitors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor'), ['controller' => 'WtcrCompetitors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCompetitorProducts form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrCompetitorProduct); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Competitor Product') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('wtcr_competitor_id', ['options' => $wtcrCompetitors, 'empty' => true]);
            echo $this->Form->input('competitor_sku');
            echo $this->Form->input('wtcr_sku');
            echo $this->Form->input('competitor_price');
            echo $this->Form->input('last_updated');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
