<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrCompetitors Controller
 *
 * @property \App\Model\Table\WtcrCompetitorsTable $WtcrCompetitors
 */
class WtcrCompetitorsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrCompetitors', $this->paginate($this->WtcrCompetitors));
        $this->set('_serialize', ['wtcrCompetitors']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Competitor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrCompetitor = $this->WtcrCompetitors->get($id, [
            'contain' => ['WtcrCompetitorProducts']
        ]);
        $this->set('wtcrCompetitor', $wtcrCompetitor);
        $this->set('_serialize', ['wtcrCompetitor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrCompetitor = $this->WtcrCompetitors->newEntity();
        if ($this->request->is('post')) {
            $wtcrCompetitor = $this->WtcrCompetitors->patchEntity($wtcrCompetitor, $this->request->data);
            if ($this->WtcrCompetitors->save($wtcrCompetitor)) {
                $this->Flash->success('The wtcr competitor has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr competitor could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrCompetitor'));
        $this->set('_serialize', ['wtcrCompetitor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Competitor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrCompetitor = $this->WtcrCompetitors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrCompetitor = $this->WtcrCompetitors->patchEntity($wtcrCompetitor, $this->request->data);
            if ($this->WtcrCompetitors->save($wtcrCompetitor)) {
                $this->Flash->success('The wtcr competitor has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr competitor could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrCompetitor'));
        $this->set('_serialize', ['wtcrCompetitor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Competitor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrCompetitor = $this->WtcrCompetitors->get($id);
        if ($this->WtcrCompetitors->delete($wtcrCompetitor)) {
            $this->Flash->success('The wtcr competitor has been deleted.');
        } else {
            $this->Flash->error('The wtcr competitor could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
