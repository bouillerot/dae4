<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DaesUsers Controller
 *
 * @property \App\Model\Table\DaesUsersTable $DaesUsers
 * @method \App\Model\Entity\DaesUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DaesUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Daes'],
        ];
        $daesUsers = $this->paginate($this->DaesUsers);

        $this->set(compact('daesUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Daes User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $daesUser = $this->DaesUsers->get($id, [
            'contain' => ['Users', 'Daes'],
        ]);

        $this->set(compact('daesUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $daesUser = $this->DaesUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $daesUser = $this->DaesUsers->patchEntity($daesUser, $this->request->getData());
            if ($this->DaesUsers->save($daesUser)) {
                $this->Flash->success(__('The daes user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The daes user could not be saved. Please, try again.'));
        }
        $users = $this->DaesUsers->Users->find('list', ['limit' => 200])->all();
        $daes = $this->DaesUsers->Daes->find('list', ['limit' => 200])->all();
        $this->set(compact('daesUser', 'users', 'daes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Daes User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $daesUser = $this->DaesUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $daesUser = $this->DaesUsers->patchEntity($daesUser, $this->request->getData());
            if ($this->DaesUsers->save($daesUser)) {
                $this->Flash->success(__('The daes user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The daes user could not be saved. Please, try again.'));
        }
        $users = $this->DaesUsers->Users->find('list', ['limit' => 200])->all();
        $daes = $this->DaesUsers->Daes->find('list', ['limit' => 200])->all();
        $this->set(compact('daesUser', 'users', 'daes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Daes User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $daesUser = $this->DaesUsers->get($id);
        if ($this->DaesUsers->delete($daesUser)) {
            $this->Flash->success(__('The daes user has been deleted.'));
        } else {
            $this->Flash->error(__('The daes user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
