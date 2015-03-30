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
		
		echo "<pre>" . print_r($ticket->Projects, TRUE) . "</pre>";
	
        $this->set('ticket', $ticket);
        $this->set('_serialize', ['ticket']);
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
