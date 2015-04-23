<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tickets Controller
 *
 * @property \App\Model\Table\TicketsTable $Tickets
 */
class TicketsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Contacts', 'TicketTypes', 'ServiceTypes', 'TicketPriorities', 'TicketStatuses', 'Users', 'CustomerSites', 'Projects', 'BillingStatuses', 'Quotes']
        ];
        $this->set('tickets', $this->paginate($this->Tickets));
        $this->set('_serialize', ['tickets']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => ['Customers', 'Contacts', 'TicketTypes', 'ServiceTypes', 'TicketPriorities', 'TicketStatuses', 'Users', 'CustomerSites', 'Projects', 'BillingStatuses', 'Quotes', 'TicketEvents']
        ]);
		
		// echo "<pre>" . $this->Tickets->Projects->find('list') . "</pre>";
	
        $this->set('ticket', $ticket);
        $this->set('_serialize', ['ticket']);
		
		$completion_options = array(
			10 => '10%',
			20 => '20%',
			30 => '30%',
			40 => '40%',
			50 => '50%',
			60 => '60%',
			70 => '70%',
			80 => '80%',
			90 => '90%',
			100 => '100%'
		);
		
		$this->set('completion_options', $completion_options);
		$this->set('projects', $this->Tickets->Projects->find('list'));
		$this->set('users', $this->Tickets->Users->find('list'));
		$this->set('priorities', $this->Tickets->TicketPriorities->find('list'));
		$this->set('statuses', $this->Tickets->TicketStatuses->find('list'));
		$this->set('billing_statuses', $this->Tickets->BillingStatuses->find('list'));
	}

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->data);
            $ticket->date_created = date('Y-m-d H:i:s'); // DEBUG??
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success('The ticket has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ticket could not be saved. Please, try again.');
                echo "<pre>" . print_r($ticket, TRUE) . "</pre>";
                echo "<pre>" . print_r($this->Tickets, TRUE) . "</pre>";
                die('ERROR::: DIED');
            }
        }
        $customers = $this->Tickets->Customers->find('list', ['limit' => 200]);
        $contacts = $this->Tickets->Contacts->find('list', ['limit' => 200]);
        $ticketTypes = $this->Tickets->TicketTypes->find('list', ['limit' => 200]);
        $serviceTypes = $this->Tickets->ServiceTypes->find('list', ['limit' => 200]);
        $ticketPriorities = $this->Tickets->TicketPriorities->find('list', ['limit' => 200]);
        $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $customerSites = $this->Tickets->CustomerSites->find('list', ['limit' => 200]);
        $projects = $this->Tickets->Projects->find('list', ['limit' => 200]);
        $billingStatuses = $this->Tickets->BillingStatuses->find('list', ['limit' => 200]);
        $quotes = $this->Tickets->Quotes->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'customers', 'contacts', 'ticketTypes', 'serviceTypes', 'ticketPriorities', 'ticketStatuses', 'users', 'customerSites', 'projects', 'billingStatuses', 'quotes'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->data);
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success('The ticket has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ticket could not be saved. Please, try again.');
            }
        }
        $customers = $this->Tickets->Customers->find('list', ['limit' => 200]);
        $contacts = $this->Tickets->Contacts->find('list', ['limit' => 200]);
        $ticketTypes = $this->Tickets->TicketTypes->find('list', ['limit' => 200]);
        $serviceTypes = $this->Tickets->ServiceTypes->find('list', ['limit' => 200]);
        $ticketPriorities = $this->Tickets->TicketPriorities->find('list', ['limit' => 200]);
        $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $customerSites = $this->Tickets->CustomerSites->find('list', ['limit' => 200]);
        $projects = $this->Tickets->Projects->find('list', ['limit' => 200]);
        $billingStatuses = $this->Tickets->BillingStatuses->find('list', ['limit' => 200]);
        $quotes = $this->Tickets->Quotes->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'customers', 'contacts', 'ticketTypes', 'serviceTypes', 'ticketPriorities', 'ticketStatuses', 'users', 'customerSites', 'projects', 'billingStatuses', 'quotes'));
        $this->set('_serialize', ['ticket']);
    }

	function update_ticket($id = null) {
		$ticket = $this->Tickets->get($id);
		
		$ticket->project_id = $this->request->data['project'];
        $ticket->status = $this->request->data['status'];
        $ticket->priority = $this->request->data['priority'];
        $ticket->completion = $this->request->data['completion'];
        $ticket->user_id = $this->request->data['user_id'];
        $ticket->billing_status_id = $this->request->data['billing_status'];
        
        if ($this->Tickets->save($ticket)) {
            $this->Flash->success("Updated Ticket Details");
        } else {
            $this->Flash->error("Could not update Ticket!");
        }
             
        
        return $this->redirect(['controller' => 'Tickets', 'action' => 'view', $id]);
	}
    
    public function set_solution($id = null, $description = null) {
        $ticket = $this->Tickets->get($id);
        $ticket->solution = $description;
        
        if($this->Tickets->save($ticket)) {
            $this->Flash->success("Saved Ticket Solution");
        } else {
            $this->Flash->error("Could not save Ticket Solution");
        }
        
        return $this->redirect(['controller' => 'Tickets', 'action' => 'view', $id]);
    }
    
    
    /**
     * Delete method
     *
     * @param string|null $id Ticket id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success('The ticket has been deleted.');
        } else {
            $this->Flash->error('The ticket could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
