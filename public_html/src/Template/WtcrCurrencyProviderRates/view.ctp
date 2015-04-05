<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Currency Provider Rate'), ['action' => 'edit', $wtcrCurrencyProviderRate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Currency Provider Rate'), ['action' => 'delete', $wtcrCurrencyProviderRate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrencyProviderRate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currency Provider Rates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider Rate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currencies'), ['controller' => 'WtcrCurrencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['controller' => 'WtcrCurrencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currency Providers'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCurrencyProviderRates view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrCurrencyProviderRate->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Wtcr Currency Provider') ?></h6>
            <p><?= $wtcrCurrencyProviderRate->has('wtcr_currency_provider') ? $this->Html->link($wtcrCurrencyProviderRate->wtcr_currency_provider->name, ['controller' => 'WtcrCurrencyProviders', 'action' => 'view', $wtcrCurrencyProviderRate->wtcr_currency_provider->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrCurrencyProviderRate->id) ?></p>
            <h6 class="subheader"><?= __('Wtcr Currency Id') ?></h6>
            <p><?= $this->Number->format($wtcrCurrencyProviderRate->wtcr_currency_id) ?></p>
            <h6 class="subheader"><?= __('Rate') ?></h6>
            <p><?= $this->Number->format($wtcrCurrencyProviderRate->rate) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($wtcrCurrencyProviderRate->timestamp) ?></p>
        </div>
    </div>
</div>
