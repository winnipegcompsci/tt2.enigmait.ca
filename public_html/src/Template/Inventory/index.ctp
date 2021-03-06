<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Inventory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Categories'), ['controller' => 'WtcrCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Category'), ['controller' => 'WtcrCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Manufacturers'), ['controller' => 'WtcrManufacturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Manufacturer'), ['controller' => 'WtcrManufacturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="inventory index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('wtcr_sku') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('wtcr_category_id') ?></th>
            <th><?= $this->Paginator->sort('wtcr_manufacturer_id') ?></th>
            <th><?= $this->Paginator->sort('manufacturer_sku') ?></th>
            <th><?= $this->Paginator->sort('wtcr_vendor_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($inventory as $inventory): ?>
        <tr>
            <td><?= $this->Number->format($inventory->id) ?></td>
            <td><?= h($inventory->wtcr_sku) ?></td>
            <td><?= h($inventory->name) ?></td>
            <td>
                <?= $inventory->has('wtcr_category') ? $this->Html->link($inventory->wtcr_category->name, ['controller' => 'WtcrCategories', 'action' => 'view', $inventory->wtcr_category->id]) : '' ?>
            </td>
            <td>
                <?= $inventory->has('wtcr_manufacturer') ? $this->Html->link($inventory->wtcr_manufacturer->name, ['controller' => 'WtcrManufacturers', 'action' => 'view', $inventory->wtcr_manufacturer->id]) : '' ?>
            </td>
            <td><?= h($inventory->manufacturer_sku) ?></td>
            <td>
                <?= $inventory->has('wtcr_vendor') ? $this->Html->link($inventory->wtcr_vendor->name, ['controller' => 'WtcrVendors', 'action' => 'view', $inventory->wtcr_vendor->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $inventory->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventory->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]) ?>
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

<?php 
    echo $this->element('modal', array(
        'title' => 'Inventory Page', 
        'body' => 'More Details to Come.'
    ));

?>
