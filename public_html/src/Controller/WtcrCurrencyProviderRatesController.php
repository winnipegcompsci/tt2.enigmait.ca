<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrCurrencyProviderRates Controller
 *
 * @property \App\Model\Table\WtcrCurrencyProviderRatesTable $WtcrCurrencyProviderRates
 */
class WtcrCurrencyProviderRatesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['WtcrCurrencies', 'WtcrCurrencyProviders']
        ];
        $this->set('wtcrCurrencyProviderRates', $this->paginate($this->WtcrCurrencyProviderRates));
        $this->set('_serialize', ['wtcrCurrencyProviderRates']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Currency Provider Rate id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrCurrencyProviderRate = $this->WtcrCurrencyProviderRates->get($id, [
            'contain' => ['WtcrCurrencies', 'WtcrCurrencyProviders']
        ]);
        $this->set('wtcrCurrencyProviderRate', $wtcrCurrencyProviderRate);
        $this->set('_serialize', ['wtcrCurrencyProviderRate']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrCurrencyProviderRate = $this->WtcrCurrencyProviderRates->newEntity();
        if ($this->request->is('post')) {
            $wtcrCurrencyProviderRate = $this->WtcrCurrencyProviderRates->patchEntity($wtcrCurrencyProviderRate, $this->request->data);
            if ($this->WtcrCurrencyProviderRates->save($wtcrCurrencyProviderRate)) {
                $this->Flash->success('The wtcr currency provider rate has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr currency provider rate could not be saved. Please, try again.');
            }
        }
        $wtcrCurrencies = $this->WtcrCurrencyProviderRates->WtcrCurrencies->find('list', ['limit' => 200]);
        $wtcrCurrencyProviders = $this->WtcrCurrencyProviderRates->WtcrCurrencyProviders->find('list', ['limit' => 200]);
        $this->set(compact('wtcrCurrencyProviderRate', 'wtcrCurrencies', 'wtcrCurrencyProviders'));
        $this->set('_serialize', ['wtcrCurrencyProviderRate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Currency Provider Rate id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrCurrencyProviderRate = $this->WtcrCurrencyProviderRates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrCurrencyProviderRate = $this->WtcrCurrencyProviderRates->patchEntity($wtcrCurrencyProviderRate, $this->request->data);
            if ($this->WtcrCurrencyProviderRates->save($wtcrCurrencyProviderRate)) {
                $this->Flash->success('The wtcr currency provider rate has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wtcr currency provider rate could not be saved. Please, try again.');
            }
        }
        $wtcrCurrencies = $this->WtcrCurrencyProviderRates->WtcrCurrencies->find('list', ['limit' => 200]);
        $wtcrCurrencyProviders = $this->WtcrCurrencyProviderRates->WtcrCurrencyProviders->find('list', ['limit' => 200]);
        $this->set(compact('wtcrCurrencyProviderRate', 'wtcrCurrencies', 'wtcrCurrencyProviders'));
        $this->set('_serialize', ['wtcrCurrencyProviderRate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Currency Provider Rate id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrCurrencyProviderRate = $this->WtcrCurrencyProviderRates->get($id);
        if ($this->WtcrCurrencyProviderRates->delete($wtcrCurrencyProviderRate)) {
            $this->Flash->success('The wtcr currency provider rate has been deleted.');
        } else {
            $this->Flash->error('The wtcr currency provider rate could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
