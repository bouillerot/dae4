<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;

/**
 * Daes Controller
 *
 * @property \App\Model\Table\DaesTable $Daes
 * @method \App\Model\Entity\Dae[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DaesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $daes = $this->paginate($this->Daes);

        $this->set(compact('daes'));
    }

    /**
     * View method
     *
     * @param string|null $id Dae id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dae = $this->Daes->get($id, [
            'contain' => ['Users', 'ItemStates'],
        ]);

        $this->set(compact('dae'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dae = $this->Daes->newEmptyEntity();
        if ($this->request->is('post')) {
            $dae = $this->Daes->patchEntity($dae, $this->request->getData());
            $usersTable = $this->getTableLocator()->get('Users');
            $dae->users = $usersTable->get(
                $this->Authentication->getIdentity()->getIdentifier()
            );
            Log::info($dae->users, '404');
            if ($this->Daes->save($dae)) {
                $this->Flash->success(__('The dae has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dae could not be saved. Please, try again.'));
        }
        $users = $this->Daes->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('dae', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dae id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dae = $this->Daes->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dae = $this->Daes->patchEntity($dae, $this->request->getData());
            if ($this->Daes->save($dae)) {
                $this->Flash->success(__('The dae has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dae could not be saved. Please, try again.'));
        }
        $users = $this->Daes->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('dae', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dae id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dae = $this->Daes->get($id);
        if ($this->Daes->delete($dae)) {
            $this->Flash->success(__('The dae has been deleted.'));
        } else {
            $this->Flash->error(__('The dae could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
