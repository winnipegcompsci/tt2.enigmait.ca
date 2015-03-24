<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Currency Provider'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Currencies'), ['controller' => 'WtcrCurrencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['controller' => 'WtcrCurrencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currency Provider Rates'), ['controller' => 'WtcrCurrencyProviderRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency Provider Rate'), ['controller' => 'WtcrCurrencyProviderRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCurrencyProviders index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('wtcr_currencies_id') ?></th>
            <th><?= $this->Paginator->sort('update_freq') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrCurrencyProviders as $wtcrCurrencyProvider): ?>
        <tr>
            <td><?= $this->Number->format($wtcrCurrencyProvider->id) ?></td>
            <td><?= h($wtcrCurrencyProvider->name) ?></td>
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
