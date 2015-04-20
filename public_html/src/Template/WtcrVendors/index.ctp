<div class="wtcrVendors index col-lg-10 col-md-9 columns">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-ticket fa-2x"></i><span style="font-size: 2em"> WTCR Vendors </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> WTCR Vendor Menu <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Vendor</a></li>
                    <li><a href="#">Find Vendor Product</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Vendor</a></li>
                </ul>
            </div>
        </div>
        
        <div class="panel-body">
        <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
        <thead>
            <tr>
                <th><?= __('id') ?></th>
                <th><?= __('vendor_name') ?></th>
                <th><?= __('update_freq_hours') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($wtcrVendors as $wtcrVendor): ?>
            <tr>
                <td><?= $this->Number->format($wtcrVendor->id) ?></td>
                <td><?= h($wtcrVendor->vendor_name) ?></td>
                <td><?= $this->Number->format($wtcrVendor->update_freq_hours) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrVendor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrVendor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrVendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrVendor->id)]) ?>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
        </table>
        </div>
    </div>
</div>