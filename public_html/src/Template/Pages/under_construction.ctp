<div class="row">
	<div class="col-lg-10 col-md-10 col-sm-10">
	
	<h1> This Page is Under Construction 
		<br />
		<small> Please check back soon or contact the development team. </small>
	</h1> 
	
    <?php 
    echo $this->Modal->create("My Modal Form", ['id' => 'MyModal', 'close' => false]) ; 
    ?>
        <p>Here I write the body of my modal !</p>
        <?php
        // Close the modal, output a footer with a 'close' button
        echo $this->Modal->end() ;
        // It is possible to specify custom buttons:
        echo $this->Modal->end([

            $this->Form->button('Submit', ['bootstrap-type' => 'primary']),   
            $this->Form->button('Close', ['data-dismiss' => 'modal']) 
    ]);
	?>
    
    </div>
</div>
<!-- /.row -->

<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../bower_components/raphael/raphael-min.js"></script>
<script src="../bower_components/morrisjs/morris.min.js"></script>
<script src="../js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
