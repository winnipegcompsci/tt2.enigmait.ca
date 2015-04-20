<div class="wtcrProductCategories index col-lg-10 col-md-9 columns">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-ticket fa-2x"></i><span style="font-size: 2em"> Product Categories </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Ticket Menu <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Product Category</a></li>
                    <li><a href="#">Find Category Product</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Prodjuct Category</a></li>
                </ul>
            </div>
        </div>
        
        <div id="panel-body">
            <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('category_name') ?></th>
                    <th><?= $this->Paginator->sort('default_markup') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wtcrProductCategories as $wtcrProductCategory): ?>
                <tr>
                    <td><?= $this->Number->format($wtcrProductCategory->id) ?></td>
                    <td><?= h($wtcrProductCategory->category_name) ?></td>
                    <td><?= $this->Number->format($wtcrProductCategory->default_markup) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrProductCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrProductCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrProductCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProductCategory->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
    