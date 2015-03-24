<div class="chat-panel panel panel-default">
    <div class="panel-heading">
		<i class="fa fa-comments fa-fw"></i> Chat
        <div class="btn-group pull-right">
			<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-chevron-down"></i>
            </button>
            <ul class="dropdown-menu slidedown">
                <li>
                    <a href="#">
                        <i class="fa fa-refresh fa-fw"></i> Refresh
                    </a>
                </li>
                <li>
				<a href="#">
                        <i class="fa fa-check-circle fa-fw"></i> Available
                </a>
                </li>
                <li>
					<a href="#">
						<i class="fa fa-times fa-fw"></i> Busy
                    </a>
                </li>
                <li>
                    <a href="#">
						<i class="fa fa-clock-o fa-fw"></i> Away
                    </a>
                </li>
            </ul>
        </div>
    </div>
	<!-- /.panel-heading -->
	<div class="panel-body">
		<ul class="chat">
			<?php foreach($messages as $message) { 	?>
				<!-- IF USER ID == $message->user_ID Then class => right clearfix -->
				<?php 
					$user = $this->Session->read('Auth.User');	
					
					if($user['id'] == $message->user_id) {
						$side = "right";
						$opposite = "left";
					} else {
						$side = "left";
						$opposite = "right";
					}			
					// right = $side
					// left = $opposite
				?>
				<li class="<?php echo $side; ?> clearfix">
					<span class="chat-img pull-<?php echo $side; ?>">
						<img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle">
					</span>
					<div class="chat-body clearfix">
						<div class="header">
							<small class=" text-muted">
								<i class="fa fa-clock-o fa-fw"></i> <?php echo $message->timestamp; ?></small>
							<strong class="pull-<?php echo $opposite; ?> primary-font"><?php echo $usernames[$message->user_id]; ?></strong>
						</div>
						<p>
							<?php echo $message->text; ?>
						</p>
					</div>
				</li>
			<?php }	?>
		
		</ul>
	</div>
	<!-- /.panel-body -->
	<div class="panel-footer">
		<div class="input-group">
			<input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here...">
			<span class="input-group-btn">
				<button class="btn btn-warning btn-sm" id="btn-chat">
					Send
				</button>
			</span>
		</div>
	</div>
	<!-- /.panel-footer -->
</div>