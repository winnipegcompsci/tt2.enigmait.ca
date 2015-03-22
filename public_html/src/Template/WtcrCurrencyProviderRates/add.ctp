<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Currency Provider Rates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Currencies'), ['controller' => 'WtcrCurrencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['controller' => 'WtcrCurrencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currency Providers'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider'), ['controller' => 'WtcrCurrencyProviders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCurrencyProviderRates form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrCurrencyProviderRate); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Currency Provider Rate') ?></legend>
        <?php
            echo $this->Form->input('wtcr_currencies_id', ['options' => $wtcrCurrencies, 'empty' => true]);
            echo $this->Form->input('wtcr_currency_provider_id', ['options' => $wtcrCurrencyProviders, 'empty' => true]);
            echo $this->Form->input('rate');
            echo $this->Form->input('timestamp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
