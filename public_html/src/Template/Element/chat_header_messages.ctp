<?php 	
	foreach($header_messages as $message) { 

		$people = $usernames->find('all', [
			'condition' => array('Users.id =' => $message->user_id)
		]);
		
		foreach($people as $person) {
			echo "<pre>Person #: " . $person->id . "</pre>";
		}
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