<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 */
class ContactsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Addresses', 'ContactTypes']
        ];
        $this->set('contacts', $this->paginate($this->Contacts));
        $this->set('_serialize', ['contacts']);
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => ['Addresses', 'ContactTypes', 'Customers', 'Tickets']
        ]);
        $this->set('contact', $contact);
        $this->set('_serialize', ['contact']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contact = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->data);
            if ($this->Contacts->save($contact)) {
                $this->Flash->success('The contact has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The contact could not be saved. Please, try again.');
            }
        }
        $addresses = $this->Contacts->Addresses->find('list', ['limit' => 200]);
        $contactTypes = $this->Contacts->ContactTypes->find('list', ['limit' => 200]);
        $this->set(compact('contact', 'addresses', 'contactTypes'));
        $this->set('_serialize', ['contact']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->data);
            if ($this->Contacts->save($contact)) {
                $this->Flash->success('The contact has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The contact could not be saved. Please, try again.');
            }
        }
        $addresses = $this->Contacts->Addresses->find('list', ['limit' => 200]);
        $contactTypes = $this->Contacts->ContactTypes->find('list', ['limit' => 200]);
        $this->set(compact('contact', 'addresses', 'contactTypes'));
        $this->set('_serialize', ['contact']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contact = $this->Contacts->get($id);
        if ($this->Contacts->delete($contact)) {
            $this->Flash->success('The contact has been deleted.');
        } else {
            $this->Flash->error('The contact could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
