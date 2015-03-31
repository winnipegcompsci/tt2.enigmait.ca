<div class="row">
	<div class="col-lg-9 col-md-8">
		<h1> Messages </h1>

		<?php echo $this->element('chat', array('messages' => $messages)); ?>
	</div>
	
	<div class="col-lg-3 col-md-4">
		<?php echo $this->element('chat_userlist'); ?>
	</div>
</div>

<div class="modal fade" id="help" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">×</button>
                <h4 class="modal-title" id="myModalLabel">Messages</h4>
            </div>

            <div class="modal-body">
                This page allows users to post messages / notifications to other users.
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            </div><!-- /.footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> <!-- /.model-fade -->