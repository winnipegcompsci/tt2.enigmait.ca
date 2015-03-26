<h1> <i class="fa fa-shopping-cart fa-fw"></i><?= $vendor_name  ?> Products </h1>

<?php 
if(!isset($vendor_products) || $vendor_products == null) {
    $this->Flash->error("No products from $vendor_name have been found. Try fetching first");
} else {
?>

<div class="panel panel-green">
    <div class="panel-heading">
        <i class="fa fa-clock-o fa-fw"></i> 
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Vendor Actions <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Find Product </a></li>
                    <li><a href="#">Fetch New Product</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Vendor Products</a></li>
                </ul>
        </div>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <h4 class="text-warn"> Product Table Here </h4>
    </div>
</div>
<?php } ?>

