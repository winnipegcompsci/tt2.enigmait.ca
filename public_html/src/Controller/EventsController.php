<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tickets', 'Types', 'Users', 'BillingTypes', 'TimeTypes']
        ];
        $this->set('events', $this->paginate($this->Events));
        $this->set('_serialize', ['events']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Tickets', 'Types', 'Users', 'BillingTypes', 'TimeTypes']
        ]);
        $this->set('event', $event);
        $this->set('_serialize', ['event']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) {
                $this->Flash->success('The event has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The event could not be saved. Please, try again.');
            }
        }
        $tickets = $this->Events->Tickets->find('list', ['limit' => 200]);
        $types = $this->Events->Types->find('list', ['limit' => 200]);
        $users = $this->Events->Users->find('list', ['limit' => 200]);
        $billingTypes = $this->Events->BillingTypes->find('list', ['limit' => 200]);
        $timeTypes = $this->Events->TimeTypes->find('list', ['limit' => 200]);
        $this->set(compact('event', 'tickets', 'types', 'users', 'billingTypes', 'timeTypes'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) {
                $this->Flash->success('The event has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The event could not be saved. Please, try again.');
            }
        }
        $tickets = $this->Events->Tickets->find('list', ['limit' => 200]);
        $types = $this->Events->Types->find('list', ['limit' => 200]);
        $users = $this->Events->Users->find('list', ['limit' => 200]);
        $billingTypes = $this->Events->BillingTypes->find('list', ['limit' => 200]);
        $timeTypes = $this->Events->TimeTypes->find('list', ['limit' => 200]);
        $this->set(compact('event', 'tickets', 'types', 'users', 'billingTypes', 'timeTypes'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success('The event has been deleted.');
        } else {
            $this->Flash->error('The event could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
