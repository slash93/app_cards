<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TeamCards Controller
 *
 * @property \App\Model\Table\TeamCardsTable $TeamCards
 */
class TeamCardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teams', 'Cards']
        ];
        $teamCards = $this->paginate($this->TeamCards);

        $this->set(compact('teamCards'));
        $this->set('_serialize', ['teamCards']);
    }

    /**
     * View method
     *
     * @param string|null $id Team Card id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamCard = $this->TeamCards->get($id, [
            'contain' => ['Teams', 'Cards']
        ]);

        $this->set('teamCard', $teamCard);
        $this->set('_serialize', ['teamCard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamCard = $this->TeamCards->newEntity();
        if ($this->request->is('post')) {
            $teamCard = $this->TeamCards->patchEntity($teamCard, $this->request->data);
            if ($this->TeamCards->save($teamCard)) {
                $this->Flash->success(__('The team card has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The team card could not be saved. Please, try again.'));
            }
        }
        $teams = $this->TeamCards->Teams->find('list', ['limit' => 200]);
        $cards = $this->TeamCards->Cards->find('list', ['limit' => 200]);
        $this->set(compact('teamCard', 'teams', 'cards'));
        $this->set('_serialize', ['teamCard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Team Card id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamCard = $this->TeamCards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamCard = $this->TeamCards->patchEntity($teamCard, $this->request->data);
            if ($this->TeamCards->save($teamCard)) {
                $this->Flash->success(__('The team card has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The team card could not be saved. Please, try again.'));
            }
        }
        $teams = $this->TeamCards->Teams->find('list', ['limit' => 200]);
        $cards = $this->TeamCards->Cards->find('list', ['limit' => 200]);
        $this->set(compact('teamCard', 'teams', 'cards'));
        $this->set('_serialize', ['teamCard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Team Card id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamCard = $this->TeamCards->get($id);
        if ($this->TeamCards->delete($teamCard)) {
            $this->Flash->success(__('The team card has been deleted.'));
        } else {
            $this->Flash->error(__('The team card could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
