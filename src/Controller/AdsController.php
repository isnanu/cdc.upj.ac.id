<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ads Controller
 *
 * @property \App\Model\Table\AdsTable $Ads
 */
class AdsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'AdCategories']
        ];
        $this->set('ads', $this->paginate($this->Ads));
        $this->set('_serialize', ['ads']);
    }

    /**
     * View method
     *
     * @param string|null $id Ad id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($ad_category = null)
    {
        $ad = $this->Ads->get($ad_category, [
            'contain' => ['Users', 'AdCategories']
        ]);
        $this->set('ad', $ad);
        $this->set('_serialize', ['ad']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ad = $this->Ads->newEntity();
        if ($this->request->is('post')) {
            $ad = $this->Ads->patchEntity($ad, $this->request->data);
            if ($this->Ads->save($ad)) {
                $this->Flash->success(__('The ad has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ad could not be saved. Please, try again.'));
            }
        }
        $users = $this->Auth->user('id');
        $adCategories = $this->Ads->AdCategories->find('list', ['limit' => 200]);
        $this->set(compact('ad', 'users', 'adCategories'));
        $this->set('_serialize', ['ad']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ad id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ad = $this->Ads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ad = $this->Ads->patchEntity($ad, $this->request->data);
            if ($this->Ads->save($ad)) {
                $this->Flash->success(__('The ad has been saved.'));
                return $this->redirect(['controller' => 'adCategories', 'action' => 'view/1']);
            } else {
                $this->Flash->error(__('The ad could not be saved. Please, try again.'));
            }
        }
        $users = $this->Ads->Users->find('list', ['limit' => 200]);
        $adCategories = $this->Ads->AdCategories->find('list', ['limit' => 200]);
        $this->set(compact('ad', 'users', 'adCategories'));
        $this->set('_serialize', ['ad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ad id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ad = $this->Ads->get($id);
        if ($this->Ads->delete($ad)) {
            $this->Flash->success(__('The ad has been deleted.'));
        } else {
            $this->Flash->error(__('The ad could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
}
