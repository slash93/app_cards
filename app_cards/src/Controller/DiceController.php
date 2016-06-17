<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dice Controller
 *
 * @property \App\Model\Table\DiceTable $Dice
 */
class DiceController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $dice = $this->paginate($this->Dice);

        $this->set(compact('dice'));
        $this->set('_serialize', ['dice']);
    }

    /**
     * View method
     *
     * @param string|null $id Dice id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dice = $this->Dice->get($id, [
            'contain' => []
        ]);

        $this->set('dice', $dice);
        $this->set('_serialize', ['dice']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dice = $this->Dice->newEntity();
        if ($this->request->is('post')) {
            $dice = $this->Dice->patchEntity($dice, $this->request->data);
            if ($this->Dice->save($dice)) {
                $this->Flash->success(__('The dice has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dice could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dice'));
        $this->set('_serialize', ['dice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dice id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dice = $this->Dice->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dice = $this->Dice->patchEntity($dice, $this->request->data);
            if ($this->Dice->save($dice)) {
                $this->Flash->success(__('The dice has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dice could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dice'));
        $this->set('_serialize', ['dice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dice id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dice = $this->Dice->get($id);
        if ($this->Dice->delete($dice)) {
            $this->Flash->success(__('The dice has been deleted.'));
        } else {
            $this->Flash->error(__('The dice could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
