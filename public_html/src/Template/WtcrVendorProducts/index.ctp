<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrVendorProducts index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('product_name') ?></th>
            <th><?= $this->Paginator->sort('wtcr_vendor_id') ?></th>
            <th><?= $this->Paginator->sort('wtcr_vendor_sku') ?></th>
            <th><?= $this->Paginator->sort('mfg_part_num') ?></th>
            <th><?= $this->Paginator->sort('vendor_price') ?></th>
            <th><?= $this->Paginator->sort('wtcr_product_category_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrVendorProducts as $wtcrVendorProduct): ?>
        <tr>
            <td><?= $this->Number->format($wtcrVendorProduct->id) ?></td>
            <td><?= h($wtcrVendorProduct->product_name) ?></td>
            <td>
                <?= $wtcrVendorProduct->has('wtcr_vendor') ? $this->Html->link($wtcrVendorProduct->wtcr_vendor->vendor_name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrVendorProduct->wtcr_vendor->id]) : '' ?>
            </td>
            <td><?= h($wtcrVendorProduct->wtcr_vendor_sku) ?></td>
            <td><?= h($wtcrVendorProduct->mfg_part_num) ?></td>
            <td><?= $this->Number->format($wtcrVendorProduct->vendor_price) ?></td>
            <td>
                <?= $wtcrVendorProduct->has('wtcr_product_category') ? $this->Html->link($wtcrVendorProduct->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrVendorProduct->wtcr_product_category->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrVendorProduct->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrVendorProduct->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrVendorProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrVendorProduct->id)]) ?>
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
