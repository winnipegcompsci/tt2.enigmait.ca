<div class="tickets view col-lg-12 col-md-9 columns">
    <h2>Ticket #<?= h($ticket->id) ?></h2>
	<div class="row">
		<div class="column col-lg-12 col-md-6">
			
			<div class="columns col-lg-8 pull-left">
				<div class="row texts">
					<div class="columns large-9">
						<h6 class="subheader"><?= __('Problem Description') ?></h6>
						<?= $this->Text->autoParagraph(h($ticket->problem_description)); ?>
					</div>
				</div>
				<div class="row texts">
					<div class="columns large-9">
						<h6 class="subheader"><?= __('Solution') ?></h6>
						<?= $this->Text->autoParagraph(h($ticket->solution)); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="column col-lg-4 pull-right">
			<h6 class="subheader"><?= __('Date Created') ?></h6>
			<p><?= h($ticket->date_created) ?></p>
			<h6 class="subheader"><?= __('Dis') ?></h6>
			<p><?= h($ticket->dis) ?></p>
		</div>
	</div>
	
	<div class="row">
        <div class="columns col-lg-4">
            <h4> Customer Information </h4>
            <h6 class="subheader"><?= __('Customer') ?></h6>
			<p><?= $ticket->has('customer') ? $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Contact') ?></h6>
			<p><?= $ticket->has('contact') ? $this->Html->link($ticket->contact->id, ['controller' => 'Contacts', 'action' => 'view', $ticket->contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Customer Site') ?></h6>
			<p><?= $ticket->has('customer_site') ? $this->Html->link($ticket->customer_site->id, ['controller' => 'CustomerSites', 'action' => 'view', $ticket->customer_site->id]) : '' ?></p>
        </div>
        
        <div class="columns col-lg-4"> 
           <h2> Ticket Information </h2>
            <h6 class="subheader"><?= __('Project') ?></h6>
			<p><?= $ticket->has('project') ? $this->Html->link($ticket->project->name, ['controller' => 'Projects', 'action' => 'view', $ticket->project->id]) : '' ?></p>
           	<h6 class="subheader"><?= __('Date Created') ?></h6>
			<p><?= h($ticket->date_created) ?></p>
			<h6 class="subheader"><?= __('Last Event') ?></h6>
			<p><?= h($ticket->dis) ?></p>
            <p><?= $ticket->has('ticket_type') ? $this->Html->link($ticket->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $ticket->ticket_type->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Service Type') ?></h6>
			<p><?= $ticket->has('service_type') ? $this->Html->link($ticket->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $ticket->service_type->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Ticket Priority') ?></h6>
			<p><?= $ticket->has('ticket_priority') ? $this->Html->link($ticket->ticket_priority->name, ['controller' => 'TicketPriorities', 'action' => 'view', $ticket->ticket_priority->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Ticket Status') ?></h6>
			<p><?= $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'TicketStatuses', 'action' => 'view', $ticket->ticket_status->id]) : '' ?></p>
			<h6 class="subheader"><?= __('User') ?></h6>
			<p><?= $ticket->has('user') ? $this->Html->link($ticket->user->id, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></p>
        </div>
        
        <div class="columns col-lg-4">
            <h4> Billing Information </h4>
            <h6 class="subheader"><?= __('Billing Status') ?></h6>
			<p><?= $ticket->has('billing_status') ? $this->Html->link($ticket->billing_status->id, ['controller' => 'BillingStatuses', 'action' => 'view', $ticket->billing_status->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Quote') ?></h6>
			<p><?= $ticket->has('quote') ? $this->Html->link($ticket->quote->name, ['controller' => 'Quotes', 'action' => 'view', $ticket->quote->id]) : '' ?></p>
        </div>
        <!--
    
		<div class="columns col-lg-12">
			<h6 class="subheader"><?= __('Customer') ?></h6>
			<p><?= $ticket->has('customer') ? $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Contact') ?></h6>
			<p><?= $ticket->has('contact') ? $this->Html->link($ticket->contact->id, ['controller' => 'Contacts', 'action' => 'view', $ticket->contact->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Ticket Type') ?></h6>
			<p><?= $ticket->has('ticket_type') ? $this->Html->link($ticket->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $ticket->ticket_type->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Service Type') ?></h6>
			<p><?= $ticket->has('service_type') ? $this->Html->link($ticket->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $ticket->service_type->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Ticket Priority') ?></h6>
			<p><?= $ticket->has('ticket_priority') ? $this->Html->link($ticket->ticket_priority->name, ['controller' => 'TicketPriorities', 'action' => 'view', $ticket->ticket_priority->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Ticket Status') ?></h6>
			<p><?= $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'TicketStatuses', 'action' => 'view', $ticket->ticket_status->id]) : '' ?></p>
			<h6 class="subheader"><?= __('User') ?></h6>
			<p><?= $ticket->has('user') ? $this->Html->link($ticket->user->id, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Customer Site') ?></h6>
			<p><?= $ticket->has('customer_site') ? $this->Html->link($ticket->customer_site->id, ['controller' => 'CustomerSites', 'action' => 'view', $ticket->customer_site->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Project') ?></h6>
			<p><?= $ticket->has('project') ? $this->Html->link($ticket->project->name, ['controller' => 'Projects', 'action' => 'view', $ticket->project->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Billing Status') ?></h6>
			<p><?= $ticket->has('billing_status') ? $this->Html->link($ticket->billing_status->id, ['controller' => 'BillingStatuses', 'action' => 'view', $ticket->billing_status->id]) : '' ?></p>
			
		</div>
        -->
	</div>
	
	<div class="row">
		<div class="columns col-lg-8 pull-left">
			<?php echo $this->element('ticket_event_timeline', array('events' => $ticket->ticket_events)); ?>
		</div>
	</div> <!-- ./row -->
</div> <!-- ./tickets view -->