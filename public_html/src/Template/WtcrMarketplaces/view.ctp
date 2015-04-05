<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Marketplace'), ['action' => 'edit', $wtcrMarketplace->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Marketplace'), ['action' => 'delete', $wtcrMarketplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrMarketplace->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Marketplaces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Marketplace'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Marketplace Templates'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Marketplace Template'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrMarketplaces view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrMarketplace->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Marketplace Name') ?></h6>
            <p><?= h($wtcrMarketplace->marketplace_name) ?></p>
            <h6 class="subheader"><?= __('Wtcr Marketplace Template') ?></h6>
            <p><?= $wtcrMarketplace->has('wtcr_marketplace_template') ? $this->Html->link($wtcrMarketplace->wtcr_marketplace_template->id, ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'view', $wtcrMarketplace->wtcr_marketplace_template->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrMarketplace->id) ?></p>
        </div>
    </div>
</div>
