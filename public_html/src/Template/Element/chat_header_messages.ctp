<?php 	
	foreach($header_messages as $message) { ?>
	<li>
		<a href="#">
			<div>
				<strong><?php echo $usernames->findById($message->user_id); ?></strong>
				<span class="pull-right text-muted">
					<em><?php echo $message->timestamp; ?></em>
				</span>
				<div><?php echo $message->text; ?></div>
			</div>
		</a>
	</li>
	<li class="divider"></li>				
<?php } ?>