<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrMarketplace->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrMarketplace->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Marketplaces'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Marketplace Templates'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Marketplace Template'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrMarketplaces form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrMarketplace); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Marketplace') ?></legend>
        <?php
            echo $this->Form->input('marketplace_name');
            echo $this->Form->input('wtcr_marketplace_template_id', ['options' => $wtcrMarketplaceTemplates, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
