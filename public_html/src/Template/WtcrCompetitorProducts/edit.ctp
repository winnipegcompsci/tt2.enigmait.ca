<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrCompetitorProduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCompetitorProduct->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Competitor Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Competitors'), ['controller' => 'WtcrCompetitors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor'), ['controller' => 'WtcrCompetitors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCompetitorProducts form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrCompetitorProduct); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Competitor Product') ?></legend>
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
