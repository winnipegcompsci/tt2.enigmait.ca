<div class="wtcrProducts index col-lg-12 col-md-9 columns">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-ticket fa-2x"></i><span style="font-size: 2em"> WTCR Products </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Product Menu <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Product</a></li>
                    <li><a href="#">Find Vendor Product</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Product</a></li>
                </ul>
            </div>
        </div>
        
        <div class="panel-body">
            <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mfg. Part Number</th>
                        <th>WTCR SKU</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Autoupdate</th>
                        <th>Static Price</th>
                        <th>Receive </th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($wtcrProducts as $wtcrProduct): ?>
                    <tr>
                        <td><?= $this->Number->format($wtcrProduct->id) ?></td>
                        <td><?= h($wtcrProduct->mfg_part_num) ?></td>
                        <td><?= h($wtcrProduct->wtcrsku) ?></td>
                        <td><?= h($wtcrProduct->wtcr_product_name) ?></td>
                        <td>
                            <?= $wtcrProduct->has('wtcr_product_category') ? $this->Html->link($wtcrProduct->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrProduct->wtcr_product_category->id]) : '' ?>
                        </td>
                        <td><?= $this->Number->format($wtcrProduct->autoupdate) == 1 ? 'Enabled' : 'Disabled' ?></td>
                        <td><?= $this->Number->format($wtcrProduct->static_price) == 0 ? 'Not Set' : '$' . number_format($wtcrProduct->static_price, 2) ?></td>
                        <td><i class='fa fa-inbox fa-fw'></i> <?= $this->Html->link("Receive", ['controller' => 'WtcrInventory', 'action' => 'receive', $wtcrProduct->wtcrsku] ); ?></td>
                        <td class="actions">
                        <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $wtcrProduct->id], ['escape' => false]) ?>
                        <?= $this->Html->link('<i class="fa fa-pencil-square-o"></i>', ['action' => 'edit', $wtcrProduct->id], ['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $wtcrProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProduct->id)], ['escape' => false]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!-- ./panel-body -->  
    </div> <!-- ./panel -->
</div> <!-- ./full width flex -->
