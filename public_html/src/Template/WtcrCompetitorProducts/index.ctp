<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Competitor Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Competitors'), ['controller' => 'WtcrCompetitors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor'), ['controller' => 'WtcrCompetitors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCompetitorProducts index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('competitor_product_name') ?></th>
            <th><?= $this->Paginator->sort('wtcr_competitor_id') ?></th>
            <th><?= $this->Paginator->sort('wtcr_competitor_sku') ?></th>
            <th><?= $this->Paginator->sort('mfg_part_number') ?></th>
            <th><?= $this->Paginator->sort('competitor_price') ?></th>
            <th><?= $this->Paginator->sort('last_updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrCompetitorProducts as $wtcrCompetitorProduct): ?>
        <tr>
            <td><?= $this->Number->format($wtcrCompetitorProduct->id) ?></td>
            <td><?= h($wtcrCompetitorProduct->competitor_product_name) ?></td>
            <td>
                <?= $wtcrCompetitorProduct->has('wtcr_competitor') ? $this->Html->link($wtcrCompetitorProduct->wtcr_competitor->name, ['controller' => 'WtcrCompetitors', 'action' => 'view', $wtcrCompetitorProduct->wtcr_competitor->id]) : '' ?>
            </td>
            <td><?= h($wtcrCompetitorProduct->wtcr_competitor_sku) ?></td>
            <td><?= h($wtcrCompetitorProduct->mfg_part_number) ?></td>
            <td><?= $this->Number->format($wtcrCompetitorProduct->competitor_price) ?></td>
            <td><?= h($wtcrCompetitorProduct->last_updated) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrCompetitorProduct->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrCompetitorProduct->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrCompetitorProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCompetitorProduct->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
