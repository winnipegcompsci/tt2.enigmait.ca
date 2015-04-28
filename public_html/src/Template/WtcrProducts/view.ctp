<div class="wtcrProducts view col-lg-12 col-md-9 columns">
    <div class="row">
        <div class="panel panel-primary columns col-lg-6" style="padding-left:0px; padding-right:0px">
            <div class="panel-heading">
                <i class="fa fa-truck fa-2x"></i><span style="font-size: 1.5em"> WTCR Product: <?= h($wtcrProduct->wtcr_product_name) ?> </span>
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
                <div class="columns col-lg-12">
                    <h4 class="subheader"> Product Details </h4>
                    <table width="100%">
                        <tr>
                            <td> Mfg. Part Number: </td>
                            <td></td>
                            <td><?= h($wtcrProduct->mfg_part_num) ?></td> 
                        </tr>
                        <tr>
                            <td>WTCR SKU: </td>
                            <td></td>
                            <td><?= h($wtcrProduct->wtcrsku) ?></td>
                        </tr>
                        <tr>
                            <td>Product Category </td>
                            <td></td>
                            <td><?= $wtcrProduct->has('wtcr_product_category') ? $this->Html->link($wtcrProduct->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrProduct->wtcr_product_category->id]) : '' ?></td>
                        </tr>                    
                    </table>
                    
                    <h4 class="subheader"> WTCR Product Attributes </h4>
                    <table width="100%">
                        <tr>
                            <td>Auto-Update WTCR Price</td>
                            <td></td>
                            <td><?= $this->Number->format($wtcrProduct->autoupdate) ?></td>
                        </tr>
                        
                        <tr>
                            <td>Override Mark Up Price with Static Price:</td>
                            <td></td>
                            <td><?= $this->Number->format($wtcrProduct->static_price) ?></td>
                        </tr>
                        
                        <tr>
                            <td>Suggested Markup</td>
                            <td></td>
                            <td><?= $this->Number->format($wtcrProduct->suggestedmarkup) ?></td>
                        </tr>
                        
                        <tr>
                            <td>Current WTCR Sale Price</td>
                            <td></td>
                            <td><?= $this->Number->format($wtcrProduct->wtcrprice) ?></td>
                        </tr>                    
                    </table>
                </div>
            </div>
        </div>
        
        <div class="columns col-lg-6 marketplaces"> 
            <div class="panel panel-green">
                <div class="panel-heading">
                    <h6 class="subheader"><?= __('Marketplace Data') ?></h6>
                </div>
                
                <div class="panel-body">
                    <?= $this->Text->autoParagraph(h($wtcrProduct->marketplace_data)); ?>
                </div>
            </div>
        </div> 
    </div>

    <div class="row pictures">
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
