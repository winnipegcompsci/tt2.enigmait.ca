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
                <li class="divider"></li>
                <li>
					<a href="#">
                        <i class="fa fa-sign-out fa-fw"></i> Sign Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
	<!-- /.panel-heading -->
	<div class="panel-body">
		<ul class="chat">
			<?php echo "<pre>" . print_r($usernames, TRUE) . "</pre>"; ?>
			<?php foreach($messages as $message) { 	?>
				<!-- IF USER ID == $message->user_ID Then class => right clearfix -->
				<li class="left clearfix">
					<span class="chat-img pull-left">
						<img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle">
					</span>
					<div class="chat-body clearfix">
						<div class="header">
							<strong class="primary-font"><?php echo $message->user_id; ?></strong>
							<small class="pull-right text-muted">
								<i class="fa fa-clock-o fa-fw"></i> <?php echo $message->timestamp; ?>
							</small>
						</div>
						<p>
							<?php echo $message->text; ?>
						</p>
					</div>
				</li>
			<?php }	?>
		
			<li class="right clearfix">
				<span class="chat-img pull-right">
					<img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle">
				</span>
				<div class="chat-body clearfix">
					<div class="header">
						<small class=" text-muted">
							<i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
						<strong class="pull-right primary-font">Bhaumik Patel</strong>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
					</p>
				</div>
			</li>
			<li class="left clearfix">
				<span class="chat-img pull-left">
					<img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle">
				</span>
				<div class="chat-body clearfix">
					<div class="header">
						<strong class="primary-font">Jack Sparrow</strong>
						<small class="pull-right text-muted">
							<i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
					</p>
				</div>
			</li>
			<li class="right clearfix">
				<span class="chat-img pull-right">
					<img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle">
				</span>
				<div class="chat-body clearfix">
					<div class="header">
						<small class=" text-muted">
							<i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
						<strong class="pull-right primary-font">Bhaumik Patel</strong>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
					</p>
				</div>
			</li>
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