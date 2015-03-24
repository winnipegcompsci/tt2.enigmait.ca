<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Test View Models'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="testViewModels form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($testViewModel); ?>
    <fieldset>
        <legend><?= __('Add Test View Model') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('body');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
