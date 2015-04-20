<div class="wtcrCurrencyProviders index col-lg-10 col-md-9 columns">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-ticket fa-2x"></i><span style="font-size: 2em"> WTCR Currency Providers </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Currency Provider Menu <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Currency Providers</a></li>
                    <li><a href="#">Find Currency Provider</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Currency Provider.</a></li>
                </ul>
            </div>
        </div>
        
        <div class="panel-body">
            <table id = "datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
            <thead>
            <tr>
                <th>ID</th>
                <th>Currency Provider Name</th>
                <th>Currency ?></th>
                <th>Update Frequency</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($wtcrCurrencyProviders as $wtcrCurrencyProvider): ?>
                <tr>
                    <td><?= $this->Number->format($wtcrCurrencyProvider->id) ?></td>
                    <td><?= h($wtcrCurrencyProvider->currency_provider_name) ?></td>
                    <td><?= $this->Number->format($wtcrCurrencyProvider->wtcr_currencies_id) ?></td>
                    <td><?= h($wtcrCurrencyProvider->update_freq) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrCurrencyProvider->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrCurrencyProvider->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrCurrencyProvider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrencyProvider->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </div>
    </div>
</div>
