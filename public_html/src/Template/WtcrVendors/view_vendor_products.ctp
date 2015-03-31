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
                    <td>In Inventory </td>
                    <td>Hide</td>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                    if(isset($vendor_products) && $vendor_products !== null) {
                        foreach($vendor_products as $product) {?> 
                        <tr>
                            <td><?= $product->name ?></td>
                            <td><?= $product->vendor_sku ?></td>
                            <td>$<?= number_format($product->vendor_price, 2); ?></td>
                            <td><?= $product->wtcr_sku ?></td>
                            <td><?= $product->wtcr_category ?></td>
                            <td><?= $product->last_updated ?></td>
                            <td>(#)or l(Add Product) </td>
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
                <button class="close" data-dismiss="modal" type=
                "button">×</button>

                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>

            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type=
                "button">Close</button> <button class="btn btn-primary" type=
                "button">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



