<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrCurrencyProvider->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrencyProvider->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Currency Providers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Currencies'), ['controller' => 'WtcrCurrencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['controller' => 'WtcrCurrencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currency Provider Rates'), ['controller' => 'WtcrCurrencyProviderRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider Rate'), ['controller' => 'WtcrCurrencyProviderRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCurrencyProviders form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrCurrencyProvider); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Currency Provider') ?></legend>
        <?php
            echo $this->Form->input('currency_provider_name');
            echo $this->Form->input('wtcr_currencies_id');
            echo $this->Form->input('update_freq');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
