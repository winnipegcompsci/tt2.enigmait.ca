<?php
    $numProducts = count($vendor_products);
?>
<div class="panel panel-info">
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
                    <td>Mfg. Part # </td>
                    <td>WTCR Category</td>
                    <td>Last Updated</td>
                    <td>In Inventory </td>
                    <td>Hide</td>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                    if(isset($vendor_products) && $vendor_products !== null) {
                        foreach($vendor_products as $product) {?> 
                        <tr>
                            <td><?= $product->product_name ?></td>
                            <td><?= $product->wtcr_vendor_sku ?></td>
                            <td>$<?= number_format($product->vendor_price, 2); ?></td>
                            <td><?= $product->mfg_part_num ?></td>
                            <td><?= $product->wtcr_product_category_id ?></td>
                            <td><?= $product->last_updated ?></td>
                            <td><?= $this->Html->link('Add Product', ['controller' => 'wtcr_vendor_products', 'action' => 'add_product', $product->wtcr_vendor_sku]); ?></td>
                            <td><i class="fa fa-remove fa-fw"></i>Hide</td>
                        </tr> 
                    <?php } 
                    }
                ?>                
            </tbody>
        </table>             
    
    </div>
</div>

<div class="modal fade" id="help" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">×</button>
                <h4 class="modal-title" id="myModalLabel">View Vendor Products</h4>
            </div>

            <div class="modal-body">
                The view vendor products page allows you to see what products our suppliers/vendors 
                are currently offering.
                
                Once you find a vendor product you would like to Add to WTCR you can click the 'Add Product' button in the column.
                This creates an 'Inventory' entry in the database with product details specific to that particular employer.
                
                Once an order is made for these parts from this vendor, they will get moved from the WTCR Products model to the Inventory Model.
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            </div><!-- /.footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> <!-- /.model-fade -->



