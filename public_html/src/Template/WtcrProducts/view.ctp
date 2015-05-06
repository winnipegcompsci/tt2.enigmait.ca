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
                            <td class="pull-right"><?= h($wtcrProduct->mfg_part_num) ?></td> 
                        </tr>
                        <tr>
                            <td>WTCR SKU: </td>
                            <td></td>
                            <td class="pull-right"><?= h($wtcrProduct->wtcrsku) ?></td>
                        </tr>
                        <tr>
                            <td>Product Category </td>
                            <td></td>
                            <td class="pull-right"><?= $wtcrProduct->has('wtcr_product_category') ? $this->Html->link($wtcrProduct->wtcr_product_category->category_name, ['controller' => 'WtcrProductCategories', 'action' => 'view', $wtcrProduct->wtcr_product_category->id]) : '' ?></td>
                        </tr>                    
                    </table>
                    
                    <h4 class="subheader"> WTCR Product Attributes </h4>
                    <table width="100%">
                        <tr>
                            <td>Auto-Update WTCR Price</td>
                            <td></td>
                            <td class="pull-right"><?= $this->Number->format($wtcrProduct->autoupdate) == 1 ? "Yes" : "No" ?></td>
                        </tr>
                        
                        <tr>
                            <td>Override Mark Up Price with Static Price:</td>
                            <td></td>
                            <td class="pull-right">$<?= number_format($wtcrProduct->static_price, 2) ?></td>
                        </tr>
                        
                        <tr>
                            <td>Suggested Markup</td>
                            <td></td>
                            <td class="pull-right"><?= 100*number_format($wtcrProduct->suggestedmarkup, 2) ?>%</td>
                        </tr>
                        
                        <tr>
                            <td>Current WTCR Sale Price</td>
                            <td></td>
                            <td class="pull-right">$<?= number_format($wtcrProduct->wtcrprice, 2) ?></td>
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
                    <?php
                        $data = unserialize($wtcrProduct->marketplace_data);
                        
                        foreach($marketplace_list as $market) {
                            echo "<h4 class=\"subheader\">" . $market->marketplace_name . ":</h4>";
                            
                            if(isset($data[$market->marketplace_name])) {
                                echo  "<table>";
                                echo  "<tr><td>Price: </td> <td>$" . number_format($data[$market->marketplace_name]['price'], 2) . "</td></tr>";
                                echo  "<tr><td>Date Listed: </td><td>" . $data[$market->marketplace_name]['date'] . "</td></tr>";
                                echo "</table>";
                            } else {
                                echo "<p> Not Listed, &nbsp;" . $this->Html->link('List Product Now', [
                                        'controller' => 'wtcr_products', 
                                        'action' => 'list_product', [
                                            'mfg_part_num' => $wtcrProduct->mfg_part_num, 
                                            'marketplace' => $market->id
                                        ]
                                ]) . "</p>"; 
                            }
                            
                        }
                    ?>
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
