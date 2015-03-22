<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Manufacturer'), ['action' => 'edit', $wtcrManufacturer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Manufacturer'), ['action' => 'delete', $wtcrManufacturer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrManufacturer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Manufacturers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Manufacturer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrManufacturers view large-10 medium-9 columns">
    <h2><?= h($wtcrManufacturer->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($wtcrManufacturer->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrManufacturer->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Inventory') ?></h4>
    <?php if (!empty($wtcrManufacturer->inventory)): ?>
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
        <?php foreach ($wtcrManufacturer->inventory as $inventory): ?>
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
