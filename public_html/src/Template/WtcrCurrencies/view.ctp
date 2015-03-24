<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Currency'), ['action' => 'edit', $wtcrCurrency->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Currency'), ['action' => 'delete', $wtcrCurrency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrency->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currencies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currency Providers'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCurrencies view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrCurrency->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($wtcrCurrency->name) ?></p>
            <h6 class="subheader"><?= __('Wtcr Currency Provider') ?></h6>
            <p><?= $wtcrCurrency->has('wtcr_currency_provider') ? $this->Html->link($wtcrCurrency->wtcr_currency_provider->name, ['controller' => 'WtcrCurrencyProviders', 'action' => 'view', $wtcrCurrency->wtcr_currency_provider->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Abbreviation') ?></h6>
            <p><?= h($wtcrCurrency->abbreviation) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrCurrency->id) ?></p>
        </div>
    </div>
</div>
