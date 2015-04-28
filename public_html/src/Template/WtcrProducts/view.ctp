<div class="wtcrProducts view col-lg-12 col-md-9 columns">
    <div class="row">
        <div class="panel panel-primary columns col-lg-12" style="padding-left:0px; padding-right:0px">
            <div class="panel-heading">
                <i class="fa fa-truck fa-2x"></i><span style="font-size: 2em"> WTCR Product: <?= h($wtcrProduct->wtcr_product_name) ?> Details </span>
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i>  <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= $this->Url->build(['controller' => 'WtcrProducts', 'action' => 'add']); ?>">Add New Product</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'WtcrProducts', 'action' => 'edit', $wtcrProduct->id]); ?>">Edit Product</a></li>
                        <li class="divider"></li>
                        <li><a href="">Delete This WTCR Product</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="large-5 columns strings">
                    <h6 class="subheader"><?= __('Mfg Part Num') ?></h6>
                    <p><?= h($wtcrProduct->mfg_part_num) ?></p>
                    <h6 class="subheader"><?= __('Wtcrsku') ?></h6>
                    <p><?= h($wtcrProduct->wtcrsku) ?></p>
                    <h6 class="subheader"><?= __('Wtcr Product Category') ?></h6>
                    <p><?= $wtcrProduct->has('wtcr_product_category') ? $this->Html->link($wtcrProduct->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrProduct->wtcr_product_category->id]) : '' ?></p>
                    <h6 class="subheader"><?= __('Wtcr Product Name') ?></h6>
                    <p><?= h($wtcrProduct->wtcr_product_name) ?></p>
                    <h6 class="subheader"><?= __('Wtcr Nid') ?></h6>
                    <p><?= h($wtcrProduct->wtcr_nid) ?></p>
                </div>
                
                <div class="columns large-9">
                    <h6 class="subheader"><?= __('Description') ?></h6>
                    <?= $this->Text->autoParagraph(h($wtcrProduct->description)); ?>
                </div>
                
                <div class="large-2 columns numbers end">
                    <h6 class="subheader"><?= __('Id') ?></h6>
                    <p><?= $this->Number->format($wtcrProduct->id) ?></p>
                    <h6 class="subheader"><?= __('Autoupdate') ?></h6>
                    <p><?= $this->Number->format($wtcrProduct->autoupdate) ?></p>
                    <h6 class="subheader"><?= __('Static Price') ?></h6>
                    <p><?= $this->Number->format($wtcrProduct->static_price) ?></p>
                    <h6 class="subheader"><?= __('Suggestedmarkup') ?></h6>
                    <p><?= $this->Number->format($wtcrProduct->suggestedmarkup) ?></p>
                    <h6 class="subheader"><?= __('Wtcrprice') ?></h6>
                    <p><?= $this->Number->format($wtcrProduct->wtcrprice) ?></p>
                </div>
                <div class="large-2 columns dates end">
                    <h6 class="subheader"><?= __('Lastupdated') ?></h6>
                    <p><?= h($wtcrProduct->lastupdated) ?></p>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row pictures">
        <div class="panel panel-green">
            <div class="panel-heading">
                <h6 class="subheader"><?= __('Marketplace Data') ?></h6>
            </div>
            
            <div class="panel-body">
                <?= $this->Text->autoParagraph(h($wtcrProduct->marketplace_data)); ?>
            </div>
        </div>
    </div>
    
    <div class="row marketplaces"> 
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <h6 class="subheader"><?= __('Product Images'); ?></h6>
            </div>
            
            <div class="panel-body">
                <?= $this->Text->autoParagraph(h($wtcrProduct->pictures)); ?>
            </div>
        </div>
    </div>
</div>
