<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrProduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProduct->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrProducts form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($wtcrProduct, ['enctype' => 'multipart/form-data']); ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Product') ?></legend>
        <?php
            echo $this->Form->input('mfg_part_num');
            echo $this->Form->input('wtcrsku');
            echo $this->Form->input('wtcr_product_name');
            echo $this->Form->input('description');
            echo $this->Form->label('AutoUpdate Listing Prices with Supplier Price Increases  ');
            echo $this->Form->checkbox('autoupdate');
            echo $this->Form->input('static_price');
            echo $this->Form->input('suggestedmarkup');
            // echo $this->Form->input('wtcrprice');
            // echo $this->Form->input('wtcr_nid');
            echo $this->Form->input('lastupdated');
            echo $this->Form->input('marketplace_data');        
            // Iterate over each marketplace in array and print out comparison.
            
            echo $this->Form->file('picture');
            // Iterate over each picture and display if possible.
            
            $pictures = unserialize($wtcrProduct->pictures); 
            foreach($pictures as $key => $picture) {
                if(isset($picture['tmp_name']) && $picture['tmp_name'] != null) {
                    echo "<pre>" . print_r($picture, TRUE) . "</pre>";
                } else {
                    unset($picture[$key]);
                }
            }
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    
        <div class="row pictures">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <h6 class="subheader"><?= __('Product Images'); ?></h6>
            </div>
                
            <div class="panel-body">
                <?php 
                    $pictures = unserialize($product_pictures);
                    
                    foreach($pictures as $key => $picture) {
                        if(isset($picture['path']) && $picture['path'] != null) {
                            if(file_exists($picture['path'])) {
                                echo "<div class=\"columns col-lg-3\">";
                                echo "<h4 class=\"subheader\">" . $picture['name'] .  "</h4>";
                                echo "<img width='100%' src='/img/" . $picture['name'] . "'> </img>";
                            
                                echo "</div>";
                            } else {
                                unset($pictures[$key]);
                            }
                            
                        } else {
                            unset($pictures[$key]);
                        }
                    }
                    
                    if(count($pictures) == 0) {
                        echo "<i class=\"fa fa-times fa-fw\"></i><span>No Pictures Found For This Product</span>";
                       
                    }
                ?>
            </div>
        </div>
    </div>
</div>
