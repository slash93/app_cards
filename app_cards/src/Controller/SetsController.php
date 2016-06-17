<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sets Controller
 *
 * @property \App\Model\Table\SetsTable $Sets
 */
class SetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Images']
        ];
        $sets = $this->paginate($this->Sets);

        $this->set(compact('sets'));
        $this->set('_serialize', ['sets']);
    }

    /**
     * View method
     *
     * @param string|null $id Set id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $set = $this->Sets->get($id, [
            'contain' => ['Images', 'Cards']
        ]);

        $this->set('set', $set);
        $this->set('_serialize', ['set']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $set = $this->Sets->newEntity();
        if ($this->request->is('post')) {
            $set = $this->Sets->patchEntity($set, $this->request->data);
            if ($this->Sets->save($set)) {
                $this->Flash->success(__('The set has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The set could not be saved. Please, try again.'));
            }
        }
        $images = $this->Sets->Images->find('list', ['limit' => 200]);
        $this->set(compact('set', 'images'));
        $this->set('_serialize', ['set']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Set id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $set = $this->Sets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $set = $this->Sets->patchEntity($set, $this->request->data);
            if ($this->Sets->save($set)) {
                $this->Flash->success(__('The set has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The set could not be saved. Please, try again.'));
            }
        }
        $images = $this->Sets->Images->find('list', ['limit' => 200]);
        $this->set(compact('set', 'images'));
        $this->set('_serialize', ['set']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Set id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $set = $this->Sets->get($id);
        if ($this->Sets->delete($set)) {
            $this->Flash->success(__('The set has been deleted.'));
        } else {
            $this->Flash->error(__('The set could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
