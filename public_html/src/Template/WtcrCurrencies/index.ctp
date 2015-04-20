<div class="wtcrCurrencies index col-lg-10 col-md-9 columns">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-ticket fa-2x"></i><span style="font-size: 2em"> WTCR Currencies </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Ticket Menu <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Currency</a></li>
                    <li><a href="#">Find Currency</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Currency</a></li>
                </ul>
            </div>
        </div>
        
        <div class="panel-body">
            <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Currency Name</th>
                    <th>Data Provider</th>
                    <th>Abbreviation</th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wtcrCurrencies as $wtcrCurrency): ?>
                <tr>
                    <td><?= $this->Number->format($wtcrCurrency->id) ?></td>
                    <td><?= h($wtcrCurrency->currency_name) ?></td>
                    <td>
                        <?= $wtcrCurrency->has('wtcr_currency_provider') ? $this->Html->link($wtcrCurrency->wtcr_currency_provider->name, ['controller' => 'WtcrCurrencyProviders', 'action' => 'view', $wtcrCurrency->wtcr_currency_provider->id]) : '' ?>
                    </td>
                    <td><?= h($wtcrCurrency->abbreviation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrCurrency->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrCurrency->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrCurrency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrency->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
