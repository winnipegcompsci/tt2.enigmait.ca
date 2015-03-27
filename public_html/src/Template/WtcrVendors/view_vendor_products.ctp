<?php
    $numProducts = count($vendor_products);
?>
<div class="panel panel-green">
    <div class="panel-heading">
        <i class="fa fa-shopping-cart fa-3x"></i><span style="font-size: 2em">&nbsp; <?= $vendor_name  ?> Products</span>
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Vendor Actions <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?= $this->Url->build(['controller' => 'WtcrVendors', 'action' => 'fetch_vendor_products', strtolower($vendor_name)]) ?>">Fetch New Products</a></li>               
                <li><a href="#">Find Vendor Product </a></li>            
                <li class="divider"></li>
                <li><a href="">Edit Vendor Settings</a></li>
            </ul>
        </div>
    </div>
        <!-- /.panel-heading -->
    <div class="panel-body">           
        <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
            <thead>
                <tr>
                    <td>Product Name</td>
                    <td>Vendor SKU</td>
                    <td>Vendor Price</td>
                    <td>WTCR SKU </td>
                    <td>WTCR Category</td>
                    <td>Last Updated</td>
                    <td>In Stock </td>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                    if(isset($vendor_products) && $vendor_products !== null) {
                        foreach($vendor_products as $product) {?> 
                        <tr>
                            <td><?= $product->name ?></td>
                            <td><?= $product->vendor_sku ?></td>
                            <td><?= $product->vendor_price ?></td>
                            <td><?= $product->wtcr_sku ?></td>
                            <td><?= $product->wtcr_category ?></td>
                            <td><?= $product->last_updated ?></td>
                            <td>Count Query</td>
                        </tr> 
                    <?php } 
                    }
                ?>                
            </tbody>
        </table>
        
        
    </div>
</div>

