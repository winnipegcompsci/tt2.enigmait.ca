<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Product Map'), ['controller' => 'WtcrProductMap', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Map'), ['controller' => 'WtcrProductMap', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['controller' => 'WtcrVendorProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor Product'), ['controller' => 'WtcrVendorProducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProductCategories form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrProductCategory); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Product Category') ?></legend>
        <?php
            echo $this->Form->input('category_name');
            echo $this->Form->input('default_markup');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
