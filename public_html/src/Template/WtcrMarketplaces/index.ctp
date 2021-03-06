<div class="wtcrMarketplaces index col-lg-10 col-md-9 columns">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-ticket fa-2x"></i><span style="font-size: 2em"> WTCR Marketplaces </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> WTCR Marketplaces <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Marketplace</a></li>
                    <li><a href="#">Find Marketplace Transaction</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Marketplace</a></li>
                </ul>
            </div>
        </div>
        
        <div class="panel-body">
           <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
            <thead>
            <tr>
                <th>ID</th>
                <th>Marketplace Name</th>
                <th>Default Template</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($wtcrMarketplaces as $wtcrMarketplace): ?>
            <tr>
                <td><?= $this->Number->format($wtcrMarketplace->id) ?></td>
                <td><?= h($wtcrMarketplace->marketplace_name) ?></td>
                <td>
                    <?= $wtcrMarketplace->has('wtcr_marketplace_template') ? $this->Html->link($wtcrMarketplace->wtcr_marketplace_template->id, ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'view', $wtcrMarketplace->wtcr_marketplace_template->id]) : 'Not Set' ?>
                </td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrMarketplace->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrMarketplace->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrMarketplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrMarketplace->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
