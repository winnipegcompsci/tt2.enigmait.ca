<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Currency Providers'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCurrencies index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('wtcr_currency_provider_id') ?></th>
            <th><?= $this->Paginator->sort('abbreviation') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrCurrencies as $wtcrCurrency): ?>
        <tr>
            <td><?= $this->Number->format($wtcrCurrency->id) ?></td>
            <td><?= h($wtcrCurrency->name) ?></td>
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
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
