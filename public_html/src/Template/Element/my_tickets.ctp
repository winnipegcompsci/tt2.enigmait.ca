<ul class="dropdown-menu dropdown-tasks">
    
    <?php 
    if($my_tickets) {
        foreach($my_tickets as $ticket) { ?>
        <li>
            <a href="<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'view', $ticket->id]);?>">
                <div>
					<p>
						<strong>Ticket #: <?= $ticket->id ?></strong>
						<span class="pull-right text-muted">Updated: <?= $ticket->dis ?></span>
					</p>
					<div class="progress progress-striped active">
                        <?php 
                            if($ticket->completion >= 0 && $ticket->completion <= 30) {
                                $bar_class = "progress-bar-danger";
                            } else if($ticket->completion > 30 && $ticket->completion <= 65) {
                                $bar_class = "progress-bar-warning";
                            } else if($ticket->completion >= 65) {
                                $bar_class = "progress-bar-success";
                            }
                        ?>
                    
						<div class="progress-bar <?= $bar_class ?>" role="progressbar" aria-valuenow="<?= $ticket->completion ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $ticket->completion ?>%">
							<span class=""><?= $ticket->completion ?>% Complete</span>
						</div>
					</div>
				</div>
			</a>
        </li>
        <li class="divider"></li>
        <?php 
        } 
    } else {
        ?>
            <li>
                <a href="<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'view', $ticket->id]);?>">
                <div>
					<p>
						<strong>No Tickets Currently Assigned to You</strong>
					</p>
				</div>
			</a>
            </li>
        
        <?
    }
    ?>

	<li>
		<a class="text-center" href="<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'index']); ?>">
			<strong>See All Tickets</strong>
			<i class="fa fa-angle-right"></i>
		</a>
    </li>
</ul>