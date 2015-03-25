<div class="tickets view col-lg-12 col-md-9 columns">
    <h2>Ticket #<?= h($ticket->id) ?></h2>
	<div class="row">
		<div class="column col-lg-12 col-md-6">
			
			<div class="columns col-lg-8 pull-left">
				<div class="row texts">
					<div class="columns col-lg-8 col-md-4">
						<h3 class="subheader"><?= __('Problem Description') ?></h3>
						<?= $this->Text->autoParagraph(h($ticket->problem_description)); ?>
					</div>
				</div>
				<div class="row texts">
					<div class="columns col-lg-8 col-md-4">
						<h3 class="subheader"><?= __('Solution') ?></h3>
						<?= strlen($ticket->solution) !== 0 ? $this->Text->autoParagraph(h($ticket->solution)) : "Unresolved"; ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<div class="row">
        <div class="columns col-lg-2">
            <h4> Customer Information </h4>
            <h6 class="subheader"><?= __('Customer') ?></h6>
			<p><?= $ticket->has('customer') ? $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Contact') ?></h6>
			<p><?= $ticket->has('contact') ? $this->Html->link($ticket->contact->id, ['controller' => 'Contacts', 'action' => 'view', $ticket->contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Customer Site') ?></h6>
			<p><?= $ticket->has('customer_site') ? $this->Html->link($ticket->customer_site->id, ['controller' => 'CustomerSites', 'action' => 'view', $ticket->customer_site->id]) : '' ?></p>
        </div>
        
        <div class="columns col-lg-4"> 
           <h4 class="subheader"> Ticket Information </h3>
            <table>
                <tr>
                    <td> Project: </td><td><?= $ticket->has('project') ? $this->Html->link($ticket->project->name, ['controller' => 'Projects', 'action' => 'view', $ticket->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <td> Date Created: </td><td><?= h($ticket->date_created) ?></td>
                </tr>
                <tr>
                    <td> Last Event: </td><td><p><?= h($ticket->dis) ?></p></td>
                </tr>
                <tr>
                    <td> Ticket Type: </td><td><?= $ticket->has('ticket_type') ? $this->Html->link($ticket->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $ticket->ticket_type->id]) : '' ?> </td>
                </tr>
                <tr>
                    <td> Service Type: </td><td><?= $ticket->has('service_type') ? $this->Html->link($ticket->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $ticket->service_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <td> Priority: </td><td><?= $ticket->has('ticket_priority') ? $this->Html->link($ticket->ticket_priority->name, ['controller' => 'TicketPriorities', 'action' => 'view', $ticket->ticket_priority->id]) : '' ?></td>
                </tr>
                <tr>
                    <td> Status: </td><td><?= $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'TicketStatuses', 'action' => 'view', $ticket->ticket_status->id]) : '' ?></td>
                </tr>                    
                <tr>
                    <td> Assigned to: </td> <td> <?= $ticket->has('user') ? $this->Html->link($ticket->user->id, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : 'Unassigned' ?> </td>
                </tr>
            </table>
        </div>
        
        <div class="columns col-lg-2">
            <h4> Billing Information </h4>
            <h6 class="subheader"><?= __('Billing Status') ?></h6>
			<p><?= $ticket->has('billing_status') ? $this->Html->link($ticket->billing_status->id, ['controller' => 'BillingStatuses', 'action' => 'view', $ticket->billing_status->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Quote') ?></h6>
			<p><?= $ticket->has('quote') ? $this->Html->link($ticket->quote->name, ['controller' => 'Quotes', 'action' => 'view', $ticket->quote->id]) : '' ?></p>
        </div>
	</div>
	
	<div class="row">
		<div class="columns col-lg-8 col-md-6">
			<?php echo $this->element('ticket_event_timeline', array('events' => $ticket->ticket_events, 'problem' => $ticket->problem_description, 'solution' => $ticket->solution)); ?>
		</div>
	</div> <!-- ./row -->
</div> <!-- ./tickets view -->