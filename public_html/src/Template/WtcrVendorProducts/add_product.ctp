<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wtcr Vendor Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Categories'), ['controller' => 'WtcrCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Category'), ['controller' => 'WtcrCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrVendorProducts form col-lg-10 col-md-9 columns">
    <?php
    
    foreach($product as $item) {
        echo "<pre>" . print_r($item, TRUE) . "</pre>"; 
    }
    ?>
    <?= $this->Form->create(null); ?>
    <fieldset>
        <legend><?= __('Add Wtcr Vendor Product') ?></legend>
        <?php
            echo $this->Form->text('name');
            echo $this->Form->input('wtcr_vendor_id', ['options' => $wtcrVendors, 'empty' => true]);
            echo $this->Form->input('vendor_sku');
            echo $this->Form->input('wtcr_sku');
            echo $this->Form->input('vendor_price');
            echo $this->Form->input('wtcr_category_id', ['options' => $wtcrCategories, 'empty' => true]);
            echo $this->Form->input('last_updated');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>