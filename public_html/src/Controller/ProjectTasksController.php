<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProjectTasks Controller
 *
 * @property \App\Model\Table\ProjectTasksTable $ProjectTasks
 */
class ProjectTasksController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects', 'Users']
        ];
        $this->set('projectTasks', $this->paginate($this->ProjectTasks));
        $this->set('_serialize', ['projectTasks']);
    }

    /**
     * View method
     *
     * @param string|null $id Project Task id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectTask = $this->ProjectTasks->get($id, [
            'contain' => ['Projects', 'Users']
        ]);
        $this->set('projectTask', $projectTask);
        $this->set('_serialize', ['projectTask']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectTask = $this->ProjectTasks->newEntity();
        if ($this->request->is('post')) {
            $projectTask = $this->ProjectTasks->patchEntity($projectTask, $this->request->data);
            if ($this->ProjectTasks->save($projectTask)) {
                $this->Flash->success('The project task has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The project task could not be saved. Please, try again.');
            }
        }
        $projects = $this->ProjectTasks->Projects->find('list', ['limit' => 200]);
        $users = $this->ProjectTasks->Users->find('list', ['limit' => 200]);
        $this->set(compact('projectTask', 'projects', 'users'));
        $this->set('_serialize', ['projectTask']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Project Task id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectTask = $this->ProjectTasks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectTask = $this->ProjectTasks->patchEntity($projectTask, $this->request->data);
            if ($this->ProjectTasks->save($projectTask)) {
                $this->Flash->success('The project task has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The project task could not be saved. Please, try again.');
            }
        }
        $projects = $this->ProjectTasks->Projects->find('list', ['limit' => 200]);
        $users = $this->ProjectTasks->Users->find('list', ['limit' => 200]);
        $this->set(compact('projectTask', 'projects', 'users'));
        $this->set('_serialize', ['projectTask']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Project Task id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectTask = $this->ProjectTasks->get($id);
        if ($this->ProjectTasks->delete($projectTask)) {
            $this->Flash->success('The project task has been deleted.');
        } else {
            $this->Flash->error('The project task could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
