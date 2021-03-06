<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Competitor'), ['action' => 'edit', $wtcrCompetitor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Competitor'), ['action' => 'delete', $wtcrCompetitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCompetitor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Competitors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Competitor Products'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor Product'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCompetitors view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrCompetitor->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Competitor Name') ?></h6>
            <p><?= h($wtcrCompetitor->competitor_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrCompetitor->id) ?></p>
            <h6 class="subheader"><?= __('Update Frequency Hours') ?></h6>
            <p><?= $this->Number->format($wtcrCompetitor->update_frequency_hours) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related WtcrCompetitorProducts') ?></h4>
    <?php if (!empty($wtcrCompetitor->wtcr_competitor_products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Competitor Product Name') ?></th>
            <th><?= __('Wtcr Competitor Id') ?></th>
            <th><?= __('Wtcr Competitor Sku') ?></th>
            <th><?= __('Mfg Part Number') ?></th>
            <th><?= __('Competitor Price') ?></th>
            <th><?= __('Last Updated') ?></th>
            <th><?= __('Competitor Url') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrCompetitor->wtcr_competitor_products as $wtcrCompetitorProducts): ?>
        <tr>
            <td><?= h($wtcrCompetitorProducts->id) ?></td>
            <td><?= h($wtcrCompetitorProducts->competitor_product_name) ?></td>
            <td><?= h($wtcrCompetitorProducts->wtcr_competitor_id) ?></td>
            <td><?= h($wtcrCompetitorProducts->wtcr_competitor_sku) ?></td>
            <td><?= h($wtcrCompetitorProducts->mfg_part_number) ?></td>
            <td><?= h($wtcrCompetitorProducts->competitor_price) ?></td>
            <td><?= h($wtcrCompetitorProducts->last_updated) ?></td>
            <td><?= h($wtcrCompetitorProducts->competitor_url) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'view', $wtcrCompetitorProducts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'edit', $wtcrCompetitorProducts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'delete', $wtcrCompetitorProducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCompetitorProducts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
