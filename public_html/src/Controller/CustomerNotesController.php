<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerNotes Controller
 *
 * @property \App\Model\Table\CustomerNotesTable $CustomerNotes
 */
class CustomerNotesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Users']
        ];
        $this->set('customerNotes', $this->paginate($this->CustomerNotes));
        $this->set('_serialize', ['customerNotes']);
    }

    /**
     * View method
     *
     * @param string|null $id Customer Note id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerNote = $this->CustomerNotes->get($id, [
            'contain' => ['Customers', 'Users']
        ]);
        $this->set('customerNote', $customerNote);
        $this->set('_serialize', ['customerNote']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerNote = $this->CustomerNotes->newEntity();
        if ($this->request->is('post')) {
            $customerNote = $this->CustomerNotes->patchEntity($customerNote, $this->request->data);
            if ($this->CustomerNotes->save($customerNote)) {
                $this->Flash->success('The customer note has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer note could not be saved. Please, try again.');
            }
        }
        $customers = $this->CustomerNotes->Customers->find('list', ['limit' => 200]);
        $users = $this->CustomerNotes->Users->find('list', ['limit' => 200]);
        $this->set(compact('customerNote', 'customers', 'users'));
        $this->set('_serialize', ['customerNote']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Note id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerNote = $this->CustomerNotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerNote = $this->CustomerNotes->patchEntity($customerNote, $this->request->data);
            if ($this->CustomerNotes->save($customerNote)) {
                $this->Flash->success('The customer note has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer note could not be saved. Please, try again.');
            }
        }
        $customers = $this->CustomerNotes->Customers->find('list', ['limit' => 200]);
        $users = $this->CustomerNotes->Users->find('list', ['limit' => 200]);
        $this->set(compact('customerNote', 'customers', 'users'));
        $this->set('_serialize', ['customerNote']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Note id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerNote = $this->CustomerNotes->get($id);
        if ($this->CustomerNotes->delete($customerNote)) {
            $this->Flash->success('The customer note has been deleted.');
        } else {
            $this->Flash->error('The customer note could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
