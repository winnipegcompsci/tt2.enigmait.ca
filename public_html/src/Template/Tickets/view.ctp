<div class="tickets view col-lg-12 col-md-9 columns">
	<div class="row">       
        <div class="panel panel-info columns col-lg-12" style="padding-left:0px; padding-right:0px">
            <div class="panel-heading">
                <i class="fa fa-info-circle fa-2x"></i><span style="font-size: 2em"> Ticket #<?= h($ticket->id) ?> Details </span>
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i>  <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Add New Event</a></li>
                        <li><a href="#">Edit Ticket</a></li>
                        <li class="divider"></li>
                        <li><a href="">Delete Ticket</a></li>
                    </ul>
                </div>
            </div> <!-- ./panel-heading -->
            
            <div class="panel-body">
                <div class="columns col-lg-4 col-md-6">
                    <h4 class="subheader"> Ticket Information </h3>
                    <table width="100%">
                        <tr>
                            <td> Project: </td>
                            <td>&nbsp;</td>
                            <td class="pull-right"><?= $ticket->has('project') ? $this->Html->link($ticket->project->name, ['controller' => 'Projects', 'action' => 'view', $ticket->project->id]) : 'No Project' ?></td>
                        </tr>
                        <tr>
                            <td> Date Created: </td>
                            <td>&nbsp;</td>
                            <td class="pull-right"><?= h($ticket->date_created) ?></td>
                        </tr>
                        <tr>
                            <td> Last Event: </td>
                            <td>&nbsp;</td>
                            <td class="pull-right"><?= h($ticket->dis) ?></td>
                        </tr>
                        <tr>
                            <td> Ticket Type: </td>
                            <td>&nbsp;</td>
                            <td class="pull-right"><?= $ticket->has('ticket_type') ? $this->Html->link($ticket->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $ticket->ticket_type->id]) : '' ?> </td>
                        </tr>
                        <tr>
                            <td> Service Type: </td>
                            <td>&nbsp;</td>
                            <td class="pull-right"><?= $ticket->has('service_type') ? $this->Html->link($ticket->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $ticket->service_type->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <td> Priority: </td>
                            <td>&nbsp;</td>
                            <td class="pull-right"><?= $ticket->has('ticket_priority') ? $this->Html->link($ticket->ticket_priority->name, ['controller' => 'TicketPriorities', 'action' => 'view', $ticket->ticket_priority->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <td> Status: </td>
                            <td>&nbsp;</td>
                            <td class="pull-right"><?= $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'TicketStatuses', 'action' => 'view', $ticket->ticket_status->id]) : '' ?></td>
                        </tr>                    
                        <tr>
                            <td> Assigned to: </td> 
                            <td>&nbsp;</td>
                            <td class="pull-right"> <?= $ticket->has('user') ? $this->Html->link($ticket->user->id, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : 'Unassigned' ?> </td>
                        </tr>
                    </table>
					
					<br />
					<h4 class="subheader">Progress </h4>
					<table>
						<tr>
							<td> Minutes Used: </td> <td> X </td>
						</tr>
						<tr>
							<td> Billing Units: </td> <td> Y </td>
						</tr>
					</table>
					
					
					<div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= $ticket->completion; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $ticket->completion; ?>%"><span class=""><?= $ticket->completion; ?>% Complete</span>						</div>
					</div>
                </div>
                
			
                <div class="columns col-lg-4 col-md-6">
                    <h4 class="subheader"> Customer Information </h4>
                    <table>
                        <tr>
                            <td>Customer: </td>
                            <td></td>
                            <td class="pull-right"><?= $ticket->has('customer') ? $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <td>Contact: </td>
                            <td></td>
                            <td class="pull-right"><?= $ticket->has('contact') ? $this->Html->link($ticket->contact->id, ['controller' => 'Contacts', 'action' => 'view', $ticket->contact->id]) : '' ?></td>
                        </tr>
						<tr>
							<td>Contact Phone: </td>
							<td></td>
							<td class="pull-right"> Query Phone </td>
						</tr>
                        <tr>
                            <td>Site: </td>
                            <td></td>
                            <td class="pull-right"><?= $ticket->has('customer_site') ? $this->Html->link($ticket->customer_site->id, ['controller' => 'CustomerSites', 'action' => 'view', $ticket->customer_site->id]) : '' ?></td>
                        </tr>
                    </table>
                    
                    <h4 class="subheader"> Billing Information </h4>
                    <table>
                        <tr>
                            <td>Billing Status: </td>
                            <td>&nbsp;</td>
                            <td class="pull-right"><?= $ticket->has('billing_status') ? $this->Html->link($ticket->billing_status->id, ['controller' => 'BillingStatuses', 'action' => 'view', $ticket->billing_status->id]) : ''?></td>
                        </tr>
                        <tr>
                            <td>Quote</td>
                            <td>&nbsp;</td>
                            <td class="pull-right"><?= $ticket->has('quote') ? $this->Html->link($ticket->quote->name, ['controller' => 'Quotes', 'action' => 'view', $ticket->quote->id]) : '' ?></td>
                        </tr>
                    </table>
                </div>
				
				<div class="columns col-lg-4 col-md-6 pull-right">
					<div style="font-size:0.75em">
					<?php 					
						echo $this->Form->create(null, ['url' => ['controller' => 'Tickets', 'action' => 'update_ticket', $ticket->id]]);
						
						echo $this->Form->label('project', 'Project');
                        error_log("TICKET PROJECT:: " . $ticket->project->id);
                        
						echo $this->Form->select('project', ['options' => $projects]);
						
						echo $this->Form->label('status', 'Ticket Status');
						echo $this->Form->select('status', $statuses);
						
						echo $this->Form->label('priority', 'Ticket Priority');
						echo $this->Form->select('priority', $priorities);
						
						echo $this->Form->label('completion', 'Completion');
						echo $this->Form->select('completion', $completion_options);
						
						echo $this->Form->label('user_id', 'Assigned To');
						echo $this->Form->select('user_id', $users);
						
						echo $this->Form->label('billing_status', 'Billing Status');
						echo $this->Form->select('billing_status', $billing_statuses);
												
						echo $this->Form->submit('Update Ticket', [
							'controller' => 'Tickets', 
							'action' => 'update_ticket',
							'class' => 'pull-right',
						]);
					?>
					</div>	
				</div>
            </div> <!-- end of panel body -->
        </div> <!-- end panel -->
    </div> <!-- end of first row -->
    <div class="row" style="padding-top: 25px">
		<div class="columns col-lg-12 col-md-6">
			<?php echo $this->element('ticket_event_timeline', array('events' => $ticket->ticket_events, 'problem' => $ticket->problem_description, 'solution' => $ticket->solution)); ?>
		</div>
	</div> <!-- ./row -->
</div> <!-- ./tickets view -->