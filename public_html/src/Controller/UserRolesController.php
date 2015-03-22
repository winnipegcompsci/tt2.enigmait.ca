<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserRoles Controller
 *
 * @property \App\Model\Table\UserRolesTable $UserRoles
 */
class UserRolesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('userRoles', $this->paginate($this->UserRoles));
        $this->set('_serialize', ['userRoles']);
    }

    /**
     * View method
     *
     * @param string|null $id User Role id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userRole = $this->UserRoles->get($id, [
            'contain' => ['Notifications', 'Users']
        ]);
        $this->set('userRole', $userRole);
        $this->set('_serialize', ['userRole']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userRole = $this->UserRoles->newEntity();
        if ($this->request->is('post')) {
            $userRole = $this->UserRoles->patchEntity($userRole, $this->request->data);
            if ($this->UserRoles->save($userRole)) {
                $this->Flash->success('The user role has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user role could not be saved. Please, try again.');
            }
        }
        $this->set(compact('userRole'));
        $this->set('_serialize', ['userRole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Role id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userRole = $this->UserRoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userRole = $this->UserRoles->patchEntity($userRole, $this->request->data);
            if ($this->UserRoles->save($userRole)) {
                $this->Flash->success('The user role has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user role could not be saved. Please, try again.');
            }
        }
        $this->set(compact('userRole'));
        $this->set('_serialize', ['userRole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Role id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userRole = $this->UserRoles->get($id);
        if ($this->UserRoles->delete($userRole)) {
            $this->Flash->success('The user role has been deleted.');
        } else {
            $this->Flash->error('The user role could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
