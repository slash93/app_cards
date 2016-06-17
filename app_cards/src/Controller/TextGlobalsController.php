<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TextGlobals Controller
 *
 * @property \App\Model\Table\TextGlobalsTable $TextGlobals
 */
class TextGlobalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $textGlobals = $this->paginate($this->TextGlobals);

        $this->set(compact('textGlobals'));
        $this->set('_serialize', ['textGlobals']);
    }

    /**
     * View method
     *
     * @param string|null $id Text Global id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $textGlobal = $this->TextGlobals->get($id, [
            'contain' => ['Cards']
        ]);

        $this->set('textGlobal', $textGlobal);
        $this->set('_serialize', ['textGlobal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $textGlobal = $this->TextGlobals->newEntity();
        if ($this->request->is('post')) {
            $textGlobal = $this->TextGlobals->patchEntity($textGlobal, $this->request->data);
            if ($this->TextGlobals->save($textGlobal)) {
                $this->Flash->success(__('The text global has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The text global could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('textGlobal'));
        $this->set('_serialize', ['textGlobal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Text Global id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $textGlobal = $this->TextGlobals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $textGlobal = $this->TextGlobals->patchEntity($textGlobal, $this->request->data);
            if ($this->TextGlobals->save($textGlobal)) {
                $this->Flash->success(__('The text global has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The text global could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('textGlobal'));
        $this->set('_serialize', ['textGlobal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Text Global id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $textGlobal = $this->TextGlobals->get($id);
        if ($this->TextGlobals->delete($textGlobal)) {
            $this->Flash->success(__('The text global has been deleted.'));
        } else {
            $this->Flash->error(__('The text global could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
