<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Product Map'), ['controller' => 'WtcrProductMap', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Map'), ['controller' => 'WtcrProductMap', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['controller' => 'WtcrVendorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['controller' => 'WtcrVendorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProductCategories index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('category_name') ?></th>
            <th><?= $this->Paginator->sort('default_markup') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrProductCategories as $wtcrProductCategory): ?>
        <tr>
            <td><?= $this->Number->format($wtcrProductCategory->id) ?></td>
            <td><?= h($wtcrProductCategory->category_name) ?></td>
            <td><?= $this->Number->format($wtcrProductCategory->default_markup) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrProductCategory->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrProductCategory->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrProductCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProductCategory->id)]) ?>
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
