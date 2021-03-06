<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cards Controller
 *
 * @property \App\Model\Table\CardsTable $Cards
 */
class CardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Dies', 'Sets', 'Globals', 'Images', 'Affiliations']
        ];
        $cards = $this->paginate($this->Cards);

        $this->set(compact('cards'));
        $this->set('_serialize', ['cards']);
    }

    /**
     * View method
     *
     * @param string|null $id Card id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $card = $this->Cards->get($id, [
            'contain' => ['Dies', 'Sets', 'Globals', 'Images', 'Affiliations', 'Comments', 'Inventories', 'TeamCards']
        ]);

        $this->set('card', $card);
        $this->set('_serialize', ['card']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $card = $this->Cards->newEntity();
        if ($this->request->is('post')) {
            $card = $this->Cards->patchEntity($card, $this->request->data);
            if ($this->Cards->save($card)) {
                $this->Flash->success(__('The card has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The card could not be saved. Please, try again.'));
            }
        }
        $dies = $this->Cards->Dies->find('list', ['limit' => 200]);
        $sets = $this->Cards->Sets->find('list', ['limit' => 200]);
        $globals = $this->Cards->Globals->find('list', ['limit' => 200]);
        $images = $this->Cards->Images->find('list', ['limit' => 200]);
        $affiliations = $this->Cards->Affiliations->find('list', ['limit' => 200]);
        $this->set(compact('card', 'dies', 'sets', 'globals', 'images', 'affiliations'));
        $this->set('_serialize', ['card']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Card id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $card = $this->Cards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $card = $this->Cards->patchEntity($card, $this->request->data);
            if ($this->Cards->save($card)) {
                $this->Flash->success(__('The card has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The card could not be saved. Please, try again.'));
            }
        }
        $dies = $this->Cards->Dies->find('list', ['limit' => 200]);
        $sets = $this->Cards->Sets->find('list', ['limit' => 200]);
        $globals = $this->Cards->Globals->find('list', ['limit' => 200]);
        $images = $this->Cards->Images->find('list', ['limit' => 200]);
        $affiliations = $this->Cards->Affiliations->find('list', ['limit' => 200]);
        $this->set(compact('card', 'dies', 'sets', 'globals', 'images', 'affiliations'));
        $this->set('_serialize', ['card']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Card id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $card = $this->Cards->get($id);
        if ($this->Cards->delete($card)) {
            $this->Flash->success(__('The card has been deleted.'));
        } else {
            $this->Flash->error(__('The card could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
