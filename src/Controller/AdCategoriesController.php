<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdCategories Controller
 *
 * @property \App\Model\Table\AdCategoriesTable $AdCategories
 */
class AdCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('adCategories', $this->paginate($this->AdCategories));
        $this->set('_serialize', ['adCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Ad Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adCategory = $this->AdCategories->get($id, [
            'contain' => ['Ads']
        ]);
        $this->set('adCategory', $adCategory);
        $this->set('_serialize', ['adCategory']);
       
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adCategory = $this->AdCategories->newEntity();
        if ($this->request->is('post')) {
            $adCategory = $this->AdCategories->patchEntity($adCategory, $this->request->data);
            if ($this->AdCategories->save($adCategory)) {
                $this->Flash->success(__('The ad category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ad category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adCategory'));
        $this->set('_serialize', ['adCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ad Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adCategory = $this->AdCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adCategory = $this->AdCategories->patchEntity($adCategory, $this->request->data);
            if ($this->AdCategories->save($adCategory)) {
                $this->Flash->success(__('The ad category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ad category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adCategory'));
        $this->set('_serialize', ['adCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ad Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adCategory = $this->AdCategories->get($id);
        if ($this->AdCategories->delete($adCategory)) {
            $this->Flash->success(__('The ad category has been deleted.'));
        } else {
            $this->Flash->error(__('The ad category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

        public function isAuthorized($user)
    {
        // The owner of an article can edit and delete it
        if (in_array($this->request->action, ['edit', 'delete'])) {
            $userId = (int)$this->request->params['pass'][0];
            if ($this->Users->isOwnedBy($userId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
    
}
