<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alumni Controller
 *
 * @property \App\Model\Table\AlumniTable $Alumni
 */
class AlumniController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('alumni', $this->paginate($this->Alumni));
        $this->set('_serialize', ['alumni']);
    }

    /**
     * View method
     *
     * @param string|null $id Alumnus id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnus = $this->Alumni->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('alumnus', $alumnus);
        $this->set('_serialize', ['alumnus']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnus = $this->Alumni->newEntity();
        if ($this->request->is('post')) {
            $alumnus = $this->Alumni->patchEntity($alumnus, $this->request->data);
            if ($this->Alumni->save($alumnus)) {
                $this->Flash->success(__('The alumnus has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alumnus could not be saved. Please, try again.'));
            }
        }
        $users = $this->Alumni->Users->find('list', ['limit' => 200]);
        $this->set(compact('alumnus', 'users'));
        $this->set('_serialize', ['alumnus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnus id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnus = $this->Alumni->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnus = $this->Alumni->patchEntity($alumnus, $this->request->data);
            if ($this->Alumni->save($alumnus)) {
                $this->Flash->success(__('The alumnus has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alumnus could not be saved. Please, try again.'));
            }
        }
        $users = $this->Alumni->Users->find('list', ['limit' => 200]);
        $this->set(compact('alumnus', 'users'));
        $this->set('_serialize', ['alumnus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnus id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnus = $this->Alumni->get($id);
        if ($this->Alumni->delete($alumnus)) {
            $this->Flash->success(__('The alumnus has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnus could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
