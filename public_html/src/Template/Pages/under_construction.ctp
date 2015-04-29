<div class="row">
	<div class="col-lg-10 col-md-10 col-sm-10">	
        <h1> This Page is Under Construction <br />
            <small> Please check back soon or contact the development team. </small>
        </h1> 
    </div>
</div>
<!-- /.row -->

<div class="modal fade" id="help" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">×</button>
                <h4 class="modal-title" id="myModalLabel">Under Construction</h4>
            </div>

            <div class="modal-body">
                You are seeing this message because the page you are trying to view is currently under
                construction.
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            </div><!-- /.footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> <!-- /.model-fade -->

<?php 
    echo $this->element('modal', array(
        'title' => 'Under Construction Page', 
        'body' => 'More Details to Come.'
    ));

?>


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
