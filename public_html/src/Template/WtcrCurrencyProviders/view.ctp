<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Currency Provider'), ['action' => 'edit', $wtcrCurrencyProvider->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Currency Provider'), ['action' => 'delete', $wtcrCurrencyProvider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrencyProvider->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currency Providers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currencies'), ['controller' => 'WtcrCurrencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['controller' => 'WtcrCurrencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currency Provider Rates'), ['controller' => 'WtcrCurrencyProviderRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider Rate'), ['controller' => 'WtcrCurrencyProviderRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCurrencyProviders view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrCurrencyProvider->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Currency Provider Name') ?></h6>
            <p><?= h($wtcrCurrencyProvider->currency_provider_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrCurrencyProvider->id) ?></p>
            <h6 class="subheader"><?= __('Wtcr Currencies Id') ?></h6>
            <p><?= $this->Number->format($wtcrCurrencyProvider->wtcr_currencies_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Update Freq') ?></h6>
            <p><?= h($wtcrCurrencyProvider->update_freq) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related WtcrCurrencies') ?></h4>
    <?php if (!empty($wtcrCurrencyProvider->wtcr_currencies)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Currency Name') ?></th>
            <th><?= __('Wtcr Currency Provider Id') ?></th>
            <th><?= __('Abbreviation') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrCurrencyProvider->wtcr_currencies as $wtcrCurrencies): ?>
        <tr>
            <td><?= h($wtcrCurrencies->id) ?></td>
            <td><?= h($wtcrCurrencies->currency_name) ?></td>
            <td><?= h($wtcrCurrencies->wtcr_currency_provider_id) ?></td>
            <td><?= h($wtcrCurrencies->abbreviation) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrCurrencies', 'action' => 'view', $wtcrCurrencies->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrCurrencies', 'action' => 'edit', $wtcrCurrencies->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrCurrencies', 'action' => 'delete', $wtcrCurrencies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrencies->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related WtcrCurrencyProviderRates') ?></h4>
    <?php if (!empty($wtcrCurrencyProvider->wtcr_currency_provider_rates)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Wtcr Currency Id') ?></th>
            <th><?= __('Wtcr Currency Provider Id') ?></th>
            <th><?= __('Rate') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrCurrencyProvider->wtcr_currency_provider_rates as $wtcrCurrencyProviderRates): ?>
        <tr>
            <td><?= h($wtcrCurrencyProviderRates->id) ?></td>
            <td><?= h($wtcrCurrencyProviderRates->wtcr_currency_id) ?></td>
            <td><?= h($wtcrCurrencyProviderRates->wtcr_currency_provider_id) ?></td>
            <td><?= h($wtcrCurrencyProviderRates->rate) ?></td>
            <td><?= h($wtcrCurrencyProviderRates->timestamp) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrCurrencyProviderRates', 'action' => 'view', $wtcrCurrencyProviderRates->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrCurrencyProviderRates', 'action' => 'edit', $wtcrCurrencyProviderRates->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrCurrencyProviderRates', 'action' => 'delete', $wtcrCurrencyProviderRates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrencyProviderRates->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
