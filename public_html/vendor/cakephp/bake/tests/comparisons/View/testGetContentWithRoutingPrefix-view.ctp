<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Test View Model'), ['action' => 'edit', $testViewModel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Test View Model'), ['action' => 'delete', $testViewModel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testViewModel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Test View Models'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test View Model'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="testViewModels view col-lg-10 col-md-9 columns">
    <h2><?= h($testViewModel->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($testViewModel->name) ?></p>
            <h6 class="subheader"><?= __('Body') ?></h6>
            <p><?= h($testViewModel->body) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($testViewModel->id) ?></p>
        </div>
    </div>
</div>
