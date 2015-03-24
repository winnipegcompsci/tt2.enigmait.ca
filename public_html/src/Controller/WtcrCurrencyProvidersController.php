<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrCurrencyProviders Controller
 *
 * @property \App\Model\Table\WtcrCurrencyProvidersTable $WtcrCurrencyProviders
 */
class WtcrCurrencyProvidersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrCurrencyProviders', $this->paginate($this->WtcrCurrencyProviders));
        $this->set('_serialize', ['wtcrCurrencyProviders']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Currency Provider id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrCurrencyProvider = $this->WtcrCurrencyProviders->get($id, [
            'contain' => ['WtcrCurrencies', 'WtcrCurrencyProviderRates']
        ]);
        $this->set('wtcrCurrencyProvider', $wtcrCurrencyProvider);
        $this->set('_serialize', ['wtcrCurrencyProvider']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrCurrencyProvider = $this->WtcrCurrencyProviders->newEntity();
        if ($this->request->is('post')) {
            $wtcrCurrencyProvider = $this->WtcrCurrencyProviders->patchEntity($wtcrCurrencyProvider, $this->request->data);
            if ($this->WtcrCurrencyProviders->save($wtcrCurrencyProvider)) {
                $this->Flash->success('The wtcr currency provider has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr currency provider could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrCurrencyProvider'));
        $this->set('_serialize', ['wtcrCurrencyProvider']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Currency Provider id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrCurrencyProvider = $this->WtcrCurrencyProviders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrCurrencyProvider = $this->WtcrCurrencyProviders->patchEntity($wtcrCurrencyProvider, $this->request->data);
            if ($this->WtcrCurrencyProviders->save($wtcrCurrencyProvider)) {
                $this->Flash->success('The wtcr currency provider has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr currency provider could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wtcrCurrencyProvider'));
        $this->set('_serialize', ['wtcrCurrencyProvider']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Currency Provider id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrCurrencyProvider = $this->WtcrCurrencyProviders->get($id);
        if ($this->WtcrCurrencyProviders->delete($wtcrCurrencyProvider)) {
            $this->Flash->success('The wtcr currency provider has been deleted.');
        } else {
            $this->Flash->error('The wtcr currency provider could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
