<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Product Category'), ['action' => 'edit', $wtcrProductCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Product Category'), ['action' => 'delete', $wtcrProductCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProductCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Products'), ['controller' => 'WtcrProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product'), ['controller' => 'WtcrProducts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['controller' => 'WtcrVendorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['controller' => 'WtcrVendorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProductCategories view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrProductCategory->category_name) ?></h2>
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
    <h4 class="subheader"><?= __('Related WtcrProducts') ?></h4>
    <?php if (!empty($wtcrProductCategory->wtcr_products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Mfg Part Num') ?></th>
            <th><?= __('Wtcrsku') ?></th>
            <th><?= __('Wtcr Product Category Id') ?></th>
            <th><?= __('Wtcr Product Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Autoupdate') ?></th>
            <th><?= __('Static Price') ?></th>
            <th><?= __('Suggestedmarkup') ?></th>
            <th><?= __('Wtcrprice') ?></th>
            <th><?= __('Wtcr Nid') ?></th>
            <th><?= __('Lastupdated') ?></th>
            <th><?= __('Marketplace Data') ?></th>
            <th><?= __('Pictures') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrProductCategory->wtcr_products as $wtcrProducts): ?>
        <tr>
            <td><?= h($wtcrProducts->id) ?></td>
            <td><?= h($wtcrProducts->mfg_part_num) ?></td>
            <td><?= h($wtcrProducts->wtcrsku) ?></td>
            <td><?= h($wtcrProducts->wtcr_product_category_id) ?></td>
            <td><?= h($wtcrProducts->wtcr_product_name) ?></td>
            <td><?= h($wtcrProducts->description) ?></td>
            <td><?= h($wtcrProducts->autoupdate) ?></td>
            <td><?= h($wtcrProducts->static_price) ?></td>
            <td><?= h($wtcrProducts->suggestedmarkup) ?></td>
            <td><?= h($wtcrProducts->wtcrprice) ?></td>
            <td><?= h($wtcrProducts->wtcr_nid) ?></td>
            <td><?= h($wtcrProducts->lastupdated) ?></td>
            <td><?= h($wtcrProducts->marketplace_data) ?></td>
            <td><?= h($wtcrProducts->pictures) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrProducts', 'action' => 'view', $wtcrProducts->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrProducts', 'action' => 'edit', $wtcrProducts->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrProducts', 'action' => 'delete', $wtcrProducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProducts->id)]) ?>
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
