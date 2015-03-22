<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Competitor Product'), ['action' => 'edit', $wtcrCompetitorProduct->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Competitor Product'), ['action' => 'delete', $wtcrCompetitorProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCompetitorProduct->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Competitor Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Competitors'), ['controller' => 'WtcrCompetitors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor'), ['controller' => 'WtcrCompetitors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCompetitorProducts view large-10 medium-9 columns">
    <h2><?= h($wtcrCompetitorProduct->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($wtcrCompetitorProduct->name) ?></p>
            <h6 class="subheader"><?= __('Wtcr Competitor') ?></h6>
            <p><?= $wtcrCompetitorProduct->has('wtcr_competitor') ? $this->Html->link($wtcrCompetitorProduct->wtcr_competitor->name, ['controller' => 'WtcrCompetitors', 'action' => 'view', $wtcrCompetitorProduct->wtcr_competitor->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Competitor Sku') ?></h6>
            <p><?= h($wtcrCompetitorProduct->competitor_sku) ?></p>
            <h6 class="subheader"><?= __('Wtcr Sku') ?></h6>
            <p><?= h($wtcrCompetitorProduct->wtcr_sku) ?></p>
            <h6 class="subheader"><?= __('Url') ?></h6>
            <p><?= h($wtcrCompetitorProduct->url) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrCompetitorProduct->id) ?></p>
            <h6 class="subheader"><?= __('Competitor Price') ?></h6>
            <p><?= $this->Number->format($wtcrCompetitorProduct->competitor_price) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Last Updated') ?></h6>
            <p><?= h($wtcrCompetitorProduct->last_updated) ?></p>
        </div>
    </div>
</div>
