<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Inventory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrInventory index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('wtcr_sku') ?></th>
            <th><?= $this->Paginator->sort('product_name') ?></th>
            <th><?= $this->Paginator->sort('wtcr_product_category_id') ?></th>
            <th><?= $this->Paginator->sort('mfg_part_number') ?></th>
            <th><?= $this->Paginator->sort('wtcr_vendor_id') ?></th>
            <th><?= $this->Paginator->sort('vendor_sku') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrInventory as $wtcrInventory): ?>
        <tr>
            <td><?= $this->Number->format($wtcrInventory->id) ?></td>
            <td><?= h($wtcrInventory->wtcr_sku) ?></td>
            <td><?= h($wtcrInventory->product_name) ?></td>
            <td>
                <?= $wtcrInventory->has('wtcr_product_category') ? $this->Html->link($wtcrInventory->wtcr_product_category->id, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrInventory->wtcr_product_category->id]) : '' ?>
            </td>
            <td><?= h($wtcrInventory->mfg_part_number) ?></td>
            <td>
                <?= $wtcrInventory->has('wtcr_vendor') ? $this->Html->link($wtcrInventory->wtcr_vendor->name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrInventory->wtcr_vendor->id]) : '' ?>
            </td>
            <td><?= h($wtcrInventory->vendor_sku) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrInventory->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrInventory->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrInventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrInventory->id)]) ?>
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
