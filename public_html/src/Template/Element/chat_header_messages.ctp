<?php 	
	foreach($header_messages as $message) { 

		$all_names = $usernames->find('all', [
			'condition' => array('id =' => $message->user_id)
		]);
		echo "<pre> ALL NAMES: " . print_r($all_names, TRUE) . "</pre>";
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