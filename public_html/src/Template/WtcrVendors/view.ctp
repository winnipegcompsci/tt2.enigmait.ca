<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Vendor'), ['action' => 'edit', $wtcrVendor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Vendor'), ['action' => 'delete', $wtcrVendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrVendor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['controller' => 'WtcrVendorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['controller' => 'WtcrVendorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrVendors view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrVendor->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($wtcrVendor->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrVendor->id) ?></p>
            <h6 class="subheader"><?= __('Update Freq Hours') ?></h6>
            <p><?= $this->Number->format($wtcrVendor->update_freq_hours) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Inventory') ?></h4>
    <?php if (!empty($wtcrVendor->inventory)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Wtcr Sku') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Wtcr Category Id') ?></th>
            <th><?= __('Wtcr Manufacturer Id') ?></th>
            <th><?= __('Manufacturer Sku') ?></th>
            <th><?= __('Wtcr Vendor Id') ?></th>
            <th><?= __('Vendor Sku') ?></th>
            <th><?= __('Vendor Price') ?></th>
            <th><?= __('Received Date') ?></th>
            <th><?= __('Markup') ?></th>
            <th><?= __('Serial Numbers') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrVendor->inventory as $inventory): ?>
        <tr>
            <td><?= h($inventory->id) ?></td>
            <td><?= h($inventory->wtcr_sku) ?></td>
            <td><?= h($inventory->name) ?></td>
            <td><?= h($inventory->wtcr_category_id) ?></td>
            <td><?= h($inventory->wtcr_manufacturer_id) ?></td>
            <td><?= h($inventory->manufacturer_sku) ?></td>
            <td><?= h($inventory->wtcr_vendor_id) ?></td>
            <td><?= h($inventory->vendor_sku) ?></td>
            <td><?= h($inventory->vendor_price) ?></td>
            <td><?= h($inventory->received_date) ?></td>
            <td><?= h($inventory->markup) ?></td>
            <td><?= h($inventory->serial_numbers) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Inventory', 'action' => 'view', $inventory->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Inventory', 'action' => 'edit', $inventory->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inventory', 'action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related WtcrVendorProducts') ?></h4>
    <?php if (!empty($wtcrVendor->wtcr_vendor_products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Wtcr Vendor Id') ?></th>
            <th><?= __('Vendor Sku') ?></th>
            <th><?= __('Wtcr Sku') ?></th>
            <th><?= __('Vendor Price') ?></th>
            <th><?= __('Wtcr Category Id') ?></th>
            <th><?= __('Last Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrVendor->wtcr_vendor_products as $wtcrVendorProducts): ?>
        <tr>
            <td><?= h($wtcrVendorProducts->id) ?></td>
            <td><?= h($wtcrVendorProducts->name) ?></td>
            <td><?= h($wtcrVendorProducts->wtcr_vendor_id) ?></td>
            <td><?= h($wtcrVendorProducts->vendor_sku) ?></td>
            <td><?= h($wtcrVendorProducts->wtcr_sku) ?></td>
            <td><?= h($wtcrVendorProducts->vendor_price) ?></td>
            <td><?= h($wtcrVendorProducts->wtcr_category_id) ?></td>
            <td><?= h($wtcrVendorProducts->last_updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrVendorProducts', 'action' => 'view', $wtcrVendorProducts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrVendorProducts', 'action' => 'edit', $wtcrVendorProducts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrVendorProducts', 'action' => 'delete', $wtcrVendorProducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrVendorProducts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
