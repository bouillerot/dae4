<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StateMachineItemStates Controller
 *
 * @property \App\Model\Table\StateMachineItemStatesTable $StateMachineItemStates
 * @method \App\Model\Entity\StateMachineItemState[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StateMachineItemStatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StateMachineProcesses'],
        ];
        $stateMachineItemStates = $this->paginate($this->StateMachineItemStates);

        $this->set(compact('stateMachineItemStates'));
    }

    /**
     * View method
     *
     * @param string|null $id State Machine Item State id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stateMachineItemState = $this->StateMachineItemStates->get($id, [
            'contain' => ['StateMachineProcesses', 'StateMachineItemStateLogs', 'StateMachineTimeouts'],
        ]);

        $this->set(compact('stateMachineItemState'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stateMachineItemState = $this->StateMachineItemStates->newEmptyEntity();
        if ($this->request->is('post')) {
            $stateMachineItemState = $this->StateMachineItemStates
            ->patchEntity($stateMachineItemState, $this->request->getData());
            if ($this->StateMachineItemStates->save($stateMachineItemState)) {
                $this->Flash->success(__('The state machine item state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state machine item state could not be saved. Please, try again.'));
        }
        $stateMachineProcesses = $this->StateMachineItemStates
        ->StateMachineProcesses->find('list', ['limit' => 200])->all();
        $this->set(compact('stateMachineItemState', 'stateMachineProcesses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id State Machine Item State id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stateMachineItemState = $this->StateMachineItemStates->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stateMachineItemState = $this->StateMachineItemStates
            ->patchEntity($stateMachineItemState, $this->request->getData());
            if ($this->StateMachineItemStates->save($stateMachineItemState)) {
                $this->Flash->success(__('The state machine item state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state machine item state could not be saved. Please, try again.'));
        }
        $stateMachineProcesses = $this->StateMachineItemStates
        ->StateMachineProcesses->find('list', ['limit' => 200])->all();
        $this->set(compact('stateMachineItemState', 'stateMachineProcesses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id State Machine Item State id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stateMachineItemState = $this->StateMachineItemStates->get($id);
        if ($this->StateMachineItemStates->delete($stateMachineItemState)) {
            $this->Flash->success(__('The state machine item state has been deleted.'));
        } else {
            $this->Flash->error(__('The state machine item state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
