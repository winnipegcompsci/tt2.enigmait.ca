<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Competitor Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Competitors'), ['controller' => 'WtcrCompetitors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor'), ['controller' => 'WtcrCompetitors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCompetitorProducts form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrCompetitorProduct); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Competitor Product') ?></legend>
        <?php
            echo $this->Form->input('competitor_product_name');
            echo $this->Form->input('wtcr_competitor_id', ['options' => $wtcrCompetitors, 'empty' => true]);
            echo $this->Form->input('wtcr_competitor_sku');
            echo $this->Form->input('mfg_part_number');
            echo $this->Form->input('competitor_price');
            echo $this->Form->input('last_updated');
            echo $this->Form->input('competitor_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
