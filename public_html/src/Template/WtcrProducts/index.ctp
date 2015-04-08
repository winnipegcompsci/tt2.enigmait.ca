<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProducts index col-lg-10 col-md-9 columns">
    <div class="panel panel-info">
        <div class="panel-heading">
            <i class="fa fa-list-alt fa-2x"></i><span style="font-size: 2em"> WTCR Products  </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Ticket Menu <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Find WTCR Product</a></li>
                    <li><a href="#">Show Recently Added Products</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete WTCR Product</a></li>
                </ul>
            </div>
        </div>
        
        <div id="panel-body">
            <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('mfg_part_num') ?></th>
                        <th><?= $this->Paginator->sort('wtcrsku') ?></th>
                        <th><?= $this->Paginator->sort('wtcr_product_category_id') ?></th>
                        <th><?= $this->Paginator->sort('wtcr_product_name') ?></th>
                        <th><?= $this->Paginator->sort('autoupdate') ?></th>
                        <th><?= $this->Paginator->sort('static_price') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($wtcrProducts as $wtcrProduct): ?>
                    <tr>
                        <td><?= $this->Number->format($wtcrProduct->id) ?></td>
                        <td><?= h($wtcrProduct->mfg_part_num) ?></td>
                        <td><?= h($wtcrProduct->wtcrsku) ?></td>
                        <td>
                            <?= $wtcrProduct->has('wtcr_product_category') ? $this->Html->link($wtcrProduct->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrProduct->wtcr_product_category->id]) : '' ?>
                        </td>
                        <td><?= h($wtcrProduct->wtcr_product_name) ?></td>
                        <td><?= $this->Number->format($wtcrProduct->autoupdate) ?></td>
                        <td><?= $this->Number->format($wtcrProduct->static_price) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrProduct->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrProduct->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProduct->id)]) ?>
                        </td>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
