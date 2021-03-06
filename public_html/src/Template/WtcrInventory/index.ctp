<div class="wtcrInventory index col-lg-12 col-md-9 columns">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-list-alt fa-2x"></i><span style="font-size: 2em"> WTCR Inventory </span>
            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Inventory Menu <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Inventory Item</a></li>
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
                        <th>ID</th>
                        <th>WTCR SKU</th>
                        <th>Product Name</th>
                        <th>Category </th>
                        <th>Mfg. Part Number</th>
                        <th>In Stock </th>
                        <th>Vendor</th>
                        <th>Serial #</th>
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
                        <td><?= h($wtcrInventory->mfg_part_number) ?></td>
                        <td>
                            <?php                               
                                if($wtcrInventory->order_details == "") {
                                    echo 'YES';
                                } else {
                                    echo 'SOLD';
                                }                            
                            ?>
                        </td>
                        <td>
                            <?= $wtcrInventory->has('wtcr_vendor') ? $this->Html->link($wtcrInventory->wtcr_vendor->vendor_name, ['controller' => 'WtcrVendors', 'action' => 'view', $wtcrInventory->wtcr_vendor->id]) : '' ?>
                        </td>
                        <td><?= h(explode(',' , $wtcrInventory->serial_numbers)[0]) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrInventory->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrInventory->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrInventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrInventory->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!-- ./end panel-body -->
    </div> <!-- ./panel-primary -->
</div> <!-- full width. -->

<?php 
    echo $this->element('modal', array(
        'title' => 'WTCR Inventory Page', 
        'body' => 'More Details to Come.'
    ));

?>
