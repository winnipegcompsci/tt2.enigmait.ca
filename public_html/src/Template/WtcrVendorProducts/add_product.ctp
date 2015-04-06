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
        foreach($product as $p) {            
            $default_name = $p->product_name;
            $default_vendor_id = $p->wtcr_vendor_id;
            $default_vendor_sku = $p->wtcr_vendor_sku;
            $mfg_part_num = $p->mfg_part_num;
            $default_vendor_price = $p->vendor_price;
            $default_category =  $p->wtcr_category_id;
        }
    ?>
    <?= $this->Form->create(null); ?>
    <fieldset>
        <legend><?= __('Create WTCR Product from a Vendor Product') ?></legend>
        <?php
            echo $this->Form->input('product_name', ['default' => $default_name, 'label' => 'Product Name']);
            echo $this->Form->input('wtcr_vendor_id', ['options' => $wtcrVendors,'default' => $default_vendor_id, 'empty' => true]);
            echo $this->Form->input('wtcr_vendor_sku', ['default' => $default_vendor_sku]);
            echo $this->Form->input('mfg_part_num', ['default' => $mfg_part_num ]);
            echo $this->Form->input('vendor_price', ['default' => $default_vendor_price]);
            echo $this->Form->input('wtcr_category_id', ['options' => $wtcrCategories, 'default' => $default_category]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Save New WTCR Product')) ?>
    <?= $this->Form->end() ?>
</div>
