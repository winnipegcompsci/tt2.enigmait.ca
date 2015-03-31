<ul class="dropdown-menu dropdown-tasks">
    
    <?php foreach($my_tickets as $ticket) { ?>
        <li>
            <a href="#">
                <div>
					<p>
						<strong>Task 1</strong>
						<span class="pull-right text-muted">40% Complete</span>
					</p>
					<div class="progress progress-striped active">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>
				</div>
			</a>
        </li>
        <li class="divider"></li>
    <?php } ?>

	<li class="divider"></li>
	<li>
		<a class="text-center" href="#">
			<strong>See All Tickets</strong>
			<i class="fa fa-angle-right"></i>
		</a>
    </li>
</ul>

<?php 
    foreach($my_tickets as $ticket) {
        echo "TICKET: <pre>" . print_r($ticket, TRUE) . "</pre>";
    }
?>