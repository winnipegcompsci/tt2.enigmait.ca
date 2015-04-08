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
    <div class="panel panel-info">
        <div class="panel-heading">
            <i class="fa fa-list-alt fa-2x"></i><span style="font-size: 2em"> WTCR Inventory  </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Ticket Menu <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Receive Inventory</a></li>
                    <li><a href="#">Find Inventory Item</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Inventory Item</a></li>
                </ul>
            </div>
        </div>
    
        <div class="panel-body">
            <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('wtcr_sku') ?></th>
                        <th><?= $this->Paginator->sort('product_name') ?></th>
                        <th><?= $this->Paginator->sort('wtcr_product_category_id') ?></th>
                        <th><?= $this->Paginator->sort('wtcr_manufacturer_id') ?></th>
                        <th><?= $this->Paginator->sort('manufacturer_sku') ?></th>
                        <th><?= $this->Paginator->sort('wtcr_vendor_id') ?></th>
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
                            <?= $wtcrInventory->has('wtcr_product_category') ? $this->Html->link($wtcrInventory->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrInventory->wtcr_product_category->id]) : '' ?>
                        </td>
                        <td><?= $this->Number->format($wtcrInventory->wtcr_manufacturer_id) ?></td>
                        <td><?= h($wtcrInventory->manufacturer_sku) ?></td>
                        <td>
                            <?= $wtcrInventory->has('wtcr_vendor') ? $this->Html->link($wtcrInventory->wtcr_vendor->vendor_name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrInventory->wtcr_vendor->id]) : '' ?>
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrInventory->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrInventory->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrInventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrInventory->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!-- ./panel-body -->
    </div> <!-- ./panel -->
</div>

