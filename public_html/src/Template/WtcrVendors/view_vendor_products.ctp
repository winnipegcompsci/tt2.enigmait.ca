$numProducts = count($vendor_products);

<div class="panel panel-default">
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
        <h4 class="text-warn"> <?= $vendor_name ?> Product Table </h4>
        <?php 
            echo "Number of Products:: " . $numProducts;
        ?>
    </div>
</div>

