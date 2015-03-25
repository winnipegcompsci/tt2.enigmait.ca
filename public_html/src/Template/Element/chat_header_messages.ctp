<?php 	
	foreach($header_messages as $message) { 
		$username = $usernames[$message->user_id];
	?>
	<li>
		<a href="#">
			<div>
				<strong><?php echo $username; ?></strong>
				<span class="pull-right text-muted">
					<em><?php echo $message->timestamp; ?></em>
				</span>
				<div><?php echo $message->text; ?></div>
			</div>
		</a>
	</li>
	<li class="divider"></li>				
<?php } ?>