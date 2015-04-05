<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Product Map'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProductMap index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('wtcr_vendor_id') ?></th>
            <th><?= $this->Paginator->sort('mfg_part_num') ?></th>
            <th><?= $this->Paginator->sort('wtcrsku') ?></th>
            <th><?= $this->Paginator->sort('wtcr_product_category_id') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('wtcr_vendor_sku') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrProductMap as $wtcrProductMap): ?>
        <tr>
            <td><?= $this->Number->format($wtcrProductMap->id) ?></td>
            <td>
                <?= $wtcrProductMap->has('wtcr_vendor') ? $this->Html->link($wtcrProductMap->wtcr_vendor->name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrProductMap->wtcr_vendor->id]) : '' ?>
            </td>
            <td><?= h($wtcrProductMap->mfg_part_num) ?></td>
            <td><?= h($wtcrProductMap->wtcrsku) ?></td>
            <td>
                <?= $wtcrProductMap->has('wtcr_product_category') ? $this->Html->link($wtcrProductMap->wtcr_product_category->id, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrProductMap->wtcr_product_category->id]) : '' ?>
            </td>
            <td><?= h($wtcrProductMap->description) ?></td>
            <td><?= h($wtcrProductMap->wtcr_vendor_sku) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrProductMap->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrProductMap->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrProductMap->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProductMap->id)]) ?>
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
