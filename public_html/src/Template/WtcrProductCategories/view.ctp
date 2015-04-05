<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Product Category'), ['action' => 'edit', $wtcrProductCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Product Category'), ['action' => 'delete', $wtcrProductCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProductCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Map'), ['controller' => 'WtcrProductMap', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Map'), ['controller' => 'WtcrProductMap', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['controller' => 'WtcrVendorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['controller' => 'WtcrVendorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProductCategories view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrProductCategory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Category Name') ?></h6>
            <p><?= h($wtcrProductCategory->category_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrProductCategory->id) ?></p>
            <h6 class="subheader"><?= __('Default Markup') ?></h6>
            <p><?= $this->Number->format($wtcrProductCategory->default_markup) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related WtcrProductMap') ?></h4>
    <?php if (!empty($wtcrProductCategory->wtcr_product_map)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Wtcr Vendor Id') ?></th>
            <th><?= __('Mfg Part Num') ?></th>
            <th><?= __('Wtcrsku') ?></th>
            <th><?= __('Wtcr Product Category Id') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Wtcr Vendor Sku') ?></th>
            <th><?= __('Supplierstock') ?></th>
            <th><?= __('Autoupdate') ?></th>
            <th><?= __('Suggestedprice') ?></th>
            <th><?= __('Suggestedmarkup') ?></th>
            <th><?= __('Wtcrprice') ?></th>
            <th><?= __('Createnode') ?></th>
            <th><?= __('Wtcr Nid') ?></th>
            <th><?= __('Lastupdated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrProductCategory->wtcr_product_map as $wtcrProductMap): ?>
        <tr>
            <td><?= h($wtcrProductMap->id) ?></td>
            <td><?= h($wtcrProductMap->wtcr_vendor_id) ?></td>
            <td><?= h($wtcrProductMap->mfg_part_num) ?></td>
            <td><?= h($wtcrProductMap->wtcrsku) ?></td>
            <td><?= h($wtcrProductMap->wtcr_product_category_id) ?></td>
            <td><?= h($wtcrProductMap->description) ?></td>
            <td><?= h($wtcrProductMap->wtcr_vendor_sku) ?></td>
            <td><?= h($wtcrProductMap->supplierstock) ?></td>
            <td><?= h($wtcrProductMap->autoupdate) ?></td>
            <td><?= h($wtcrProductMap->suggestedprice) ?></td>
            <td><?= h($wtcrProductMap->suggestedmarkup) ?></td>
            <td><?= h($wtcrProductMap->wtcrprice) ?></td>
            <td><?= h($wtcrProductMap->createnode) ?></td>
            <td><?= h($wtcrProductMap->wtcr_nid) ?></td>
            <td><?= h($wtcrProductMap->lastupdated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrProductMap', 'action' => 'view', $wtcrProductMap->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrProductMap', 'action' => 'edit', $wtcrProductMap->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrProductMap', 'action' => 'delete', $wtcrProductMap->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProductMap->id)]) ?>

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
    <?php if (!empty($wtcrProductCategory->wtcr_vendor_products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Product Name') ?></th>
            <th><?= __('Wtcr Vendor Id') ?></th>
            <th><?= __('Wtcr Vendor Sku') ?></th>
            <th><?= __('Mfg Part Num') ?></th>
            <th><?= __('Vendor Price') ?></th>
            <th><?= __('Wtcr Product Category Id') ?></th>
            <th><?= __('Last Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrProductCategory->wtcr_vendor_products as $wtcrVendorProducts): ?>
        <tr>
            <td><?= h($wtcrVendorProducts->id) ?></td>
            <td><?= h($wtcrVendorProducts->product_name) ?></td>
            <td><?= h($wtcrVendorProducts->wtcr_vendor_id) ?></td>
            <td><?= h($wtcrVendorProducts->wtcr_vendor_sku) ?></td>
            <td><?= h($wtcrVendorProducts->mfg_part_num) ?></td>
            <td><?= h($wtcrVendorProducts->vendor_price) ?></td>
            <td><?= h($wtcrVendorProducts->wtcr_product_category_id) ?></td>
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
