<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TimeTypes Controller
 *
 * @property \App\Model\Table\TimeTypesTable $TimeTypes
 */
class TimeTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('timeTypes', $this->paginate($this->TimeTypes));
        $this->set('_serialize', ['timeTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Time Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timeType = $this->TimeTypes->get($id, [
            'contain' => ['BillingPlanLines', 'TicketEvents']
        ]);
        $this->set('timeType', $timeType);
        $this->set('_serialize', ['timeType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timeType = $this->TimeTypes->newEntity();
        if ($this->request->is('post')) {
            $timeType = $this->TimeTypes->patchEntity($timeType, $this->request->data);
            if ($this->TimeTypes->save($timeType)) {
                $this->Flash->success('The time type has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The time type could not be saved. Please, try again.');
            }
        }
        $this->set(compact('timeType'));
        $this->set('_serialize', ['timeType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Time Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timeType = $this->TimeTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timeType = $this->TimeTypes->patchEntity($timeType, $this->request->data);
            if ($this->TimeTypes->save($timeType)) {
                $this->Flash->success('The time type has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The time type could not be saved. Please, try again.');
            }
        }
        $this->set(compact('timeType'));
        $this->set('_serialize', ['timeType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Time Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timeType = $this->TimeTypes->get($id);
        if ($this->TimeTypes->delete($timeType)) {
            $this->Flash->success('The time type has been deleted.');
        } else {
            $this->Flash->error('The time type could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
