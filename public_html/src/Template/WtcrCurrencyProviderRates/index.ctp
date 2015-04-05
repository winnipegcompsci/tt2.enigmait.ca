<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Currency Provider Rate'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Currencies'), ['controller' => 'WtcrCurrencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['controller' => 'WtcrCurrencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currency Providers'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCurrencyProviderRates index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('wtcr_currencies_id') ?></th>
            <th><?= $this->Paginator->sort('wtcr_currency_provider_id') ?></th>
            <th><?= $this->Paginator->sort('rate') ?></th>
            <th><?= $this->Paginator->sort('timestamp') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrCurrencyProviderRates as $wtcrCurrencyProviderRate): ?>
        <tr>
            <td><?= $this->Number->format($wtcrCurrencyProviderRate->id) ?></td>
            <td>
                <?= $wtcrCurrencyProviderRate->has('wtcr_currency') ? $this->Html->link($wtcrCurrencyProviderRate->wtcr_currency->name, ['controller' => 'WtcrCurrencies', 'action' => 'view', $wtcrCurrencyProviderRate->wtcr_currency->id]) : '' ?>
            </td>
            <td>
                <?= $wtcrCurrencyProviderRate->has('wtcr_currency_provider') ? $this->Html->link($wtcrCurrencyProviderRate->wtcr_currency_provider->name, ['controller' => 'WtcrCurrencyProviders', 'action' => 'view', $wtcrCurrencyProviderRate->wtcr_currency_provider->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($wtcrCurrencyProviderRate->rate) ?></td>
            <td><?= h($wtcrCurrencyProviderRate->timestamp) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrCurrencyProviderRate->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrCurrencyProviderRate->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrCurrencyProviderRate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrencyProviderRate->id)]) ?>
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
