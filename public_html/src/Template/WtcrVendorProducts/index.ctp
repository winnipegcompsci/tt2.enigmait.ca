<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Categories'), ['controller' => 'WtcrCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Category'), ['controller' => 'WtcrCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrVendorProducts index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('wtcr_vendor_id') ?></th>
            <th><?= $this->Paginator->sort('vendor_sku') ?></th>
            <th><?= $this->Paginator->sort('wtcr_sku') ?></th>
            <th><?= $this->Paginator->sort('vendor_price') ?></th>
            <th><?= $this->Paginator->sort('wtcr_category_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrVendorProducts as $wtcrVendorProduct): ?>
        <tr>
            <td><?= $this->Number->format($wtcrVendorProduct->id) ?></td>
            <td><?= h($wtcrVendorProduct->name) ?></td>
            <td>
                <?= $wtcrVendorProduct->has('wtcr_vendor') ? $this->Html->link($wtcrVendorProduct->wtcr_vendor->name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrVendorProduct->wtcr_vendor->id]) : '' ?>
            </td>
            <td><?= h($wtcrVendorProduct->vendor_sku) ?></td>
            <td><?= h($wtcrVendorProduct->wtcr_sku) ?></td>
            <td><?= $this->Number->format($wtcrVendorProduct->vendor_price) ?></td>
            <td>
                <?= $wtcrVendorProduct->has('wtcr_category') ? $this->Html->link($wtcrVendorProduct->wtcr_category->name, ['controller' => 'WtcrCategories', 'action' => 'view', $wtcrVendorProduct->wtcr_category->id]) : '' ?>
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
