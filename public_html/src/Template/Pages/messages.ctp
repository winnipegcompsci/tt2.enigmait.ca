<div class="row">
	<div class="col-lg-9 col-md-8">
		<h1> Messages </h1>

		<?php echo $this->element('chat', array('messages' => $messages)); ?>
	</div>
	
	<div class="col-lg-3 col-md-4">
		<?php echo $this->element('chat_userlist'); ?>
	</div>
</div>