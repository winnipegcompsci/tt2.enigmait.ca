<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Competitor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Competitor Products'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Competitor Product'), ['controller' => 'WtcrCompetitorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCompetitors index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('update_frequency_hours') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrCompetitors as $wtcrCompetitor): ?>
        <tr>
            <td><?= $this->Number->format($wtcrCompetitor->id) ?></td>
            <td><?= h($wtcrCompetitor->name) ?></td>
            <td><?= $this->Number->format($wtcrCompetitor->update_frequency_hours) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrCompetitor->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrCompetitor->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrCompetitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCompetitor->id)]) ?>
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
