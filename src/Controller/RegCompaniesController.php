<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
use Cake\ORM\Query;
use Cake\Network\Email\Email;
use Cake\Utility\Text;

/**
 * RegCompanies Controller
 *
 * @property \App\Model\Table\RegCompaniesTable $RegCompanies
 */
class RegCompaniesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        // $this->loadComponent('UploadRegCompany');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('regCompanies', $this->paginate($this->RegCompanies));
        $this->set('_serialize', ['regCompanies']);
    }

    /**
     * View method
     *
     * @param string|null $id Reg Company id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regCompany = $this->RegCompanies->get($id, [
            'contain' => []
        ]);
        $this->set('regCompany', $regCompany);
        $this->set('_serialize', ['regCompany']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {   
      $regCompany = $this->RegCompanies->newEntity();
      if ($this->request->is('post')) {
        $regCompany = $this->RegCompanies->patchEntity($regCompany, $this->request->data);
        $dir = WWW_ROOT.'img'.DS.'uploads/reg_companies';         
        $file = $this->request->data['logo'];
        $filename = $file['name'];
        $file_tmp_name = $file['tmp_name'];          
        $allowed = array('png', 'jpg', 'jpeg');
        if ( !in_array( substr( strrchr( $filename , '.') , 1 ) , $allowed) ) 
        {
          throw new InternalErrorException("Error Processing Request.", 1);   
        }
        elseif( is_uploaded_file( $file_tmp_name ) )
        {
          $savedname = Text::uuid().'-'.$filename;
          move_uploaded_file($file_tmp_name, $dir.DS.$savedname);
          $regCompany->logo = $savedname;           

          if ($this->RegCompanies->save($regCompany)) {
            $cdcMail = 'cdc.upj@gmail.com';
            $emailAdmin = '4dm1n.cdc@gmail.com';

            $email = new Email();
            $email->transport('mailjet');

            try {
              $res = $email->from($cdcMail)
                    ->to([$emailAdmin => 'Admin Career Development Center UPJ'])
                    ->subject('CDC : New Registration Need Approval')                   
                    ->send("Some company want to join with us and need approval from you. For more information go open http://localhost/aa/reg_companies/");
            } 
            catch (Exception $e) {

                echo 'Exception : ',  $e->getMessage(), "\n";

            }
            $this->Flash->greatSuccess(__('The reg company has been saved. username atau Password kamu akan di email')); 
            return $this->redirect(['controller'=>'users','action' => 'login']);
          } 
        }
        else 
        {
          $this->Flash->error(__('The reg company could not be saved. Please, try again.'));
        }
      }            
      $this->set(compact('regCompany'));
      $this->set('_serialize', ['regCompany']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reg Company id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regCompany = $this->RegCompanies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regCompany = $this->RegCompanies->patchEntity($regCompany, $this->request->data);
            if ($this->RegCompanies->save($regCompany)) {
                $this->Flash->success(__('The reg company has been saved.'));             
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The reg company could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('regCompany'));
        $this->set('_serialize', ['regCompany']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reg Company id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regCompany = $this->RegCompanies->get($id);
        unlink('C:/xampp/htdocs/aa/webroot/img/uploads/reg_companies/'.($regCompany->logo));
        if ($this->RegCompanies->delete($regCompany)) {
            $this->Flash->success(__('The reg company has been deleted.'));
        } else {
            $this->Flash->error(__('The reg company could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function random() {
      $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
      $random = array(); //remember to declare $random as an array
      $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
      for ($i = 0; $i < 8; $i++) {
          $n = rand(0, $alphaLength);
          $random[] = $alphabet[$n];
      }
      $random = implode($random); //turn the array into a string
      return $random;
    }

   public function approve($id = null)
    {        
      $regCompany = $this->RegCompanies->get($id);     
      $regCompany->approval = '1';
      $regCompany->username = $this->random();
      $regCompany->password = $this->random();
      if ($this->RegCompanies->save($regCompany)) {
        $this->Flash->success(__('The reg company has been approved, and has been saved.'));
        return $this->redirect(['action' => 'addUser',$regCompany->id]);    
      } 
      else {
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
        return $this->redirect(['action' => 'index']);        
      }      
    }

    public function addUser($id = null)
    {       
      $regCompany = $this->RegCompanies->get($id); 
      $data = [
          'id' => $regCompany->id,
          'username' => $regCompany->username,
          'password' => $regCompany->password
      ];
      $Users = TableRegistry::get('Users');
      $user = $Users->newEntity($data, [
          'username' => 'username',
          'password' => 'password'
      ]);
      $user->role_id = '2';
      $Users->save($user);
      $data = [
        'name'=> $regCompany->name,
        'address'=>$regCompany->address,
        'phone'=>$regCompany->phone,
        'fax'=>$regCompany->fax,
        'email'=>$regCompany->email,
        'web'=>$regCompany->web,
        'industry'=>$regCompany->industry,
        'logo'=>$regCompany->logo,
        'cp_name'=>$regCompany->cp_name,
        'cp_position'=>$regCompany->cp_position,
        'cp_phone'=>$regCompany->cp_phone,
        'cp_email'=>$regCompany->cp_email
      ];

      $Companies = TableRegistry::get('Companies');
      $company = $Companies->newEntity($data, [  
          'name'=>'name',
          'address'=>'address',
          'phone'=>'phone',
          'fax'=>'fax',
          'email'=>'email',
          'web'=>'web',
          'industry'=>'industry',
          'logo'=>'logo',
          'cp_name'=>'cp_name',
          'cp_position'=>'cp_position',
          'cp_phone'=>'cp_phone',
          'cp_email'=>'cp_email'
      ]);      
      $company->user_id = $user->id;
      
      if ($Companies->save($company)) {
        $this->Flash->success(__('The reg company has been approved, and has been saved.'));
        return $this->redirect(['action' => 'mailUser',$regCompany->id]);    
      } 
      else {
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
        return $this->redirect(['action' => 'index']);        
      }    
      // return $user->id;        
      // if ($Users->save($user)) {
      //   $this->Flash->success(__('The reg company has been approved, and has been saved.'));
      //   // return $this->redirect(['action' => 'mailUser',$regCompany->id]);
      //   $this->setAction('mailUser',$regCompany->id);
      //   return $user->id;        
      // } 
      // else {
      //   $this->Flash->error(__('The user could not be saved. Please, try again.'));
      //   return $this->redirect(['action' => 'index']);        
      // }
    }

    public function mailUser($id = null)
    {   
      $regCompany = $this->RegCompanies->get($id); 

      $cdcMail = 'cdc.upj@gmail.com';
      // $emailuser = $this->request->data['cp_email'];
      $emailAdmin = '4dm1n.cdc@gmail.com';

      $username = $regCompany->username;
      $password = $regCompany->password;

      $email = new Email();
      $email->transport('mailjet');
      // $email->template('pesan');

      try {
        $res = $email->from($cdcMail)
          ->to([$emailAdmin => 'asal'])
          ->subject('Your registration on Career Development Center Universitas Pembangunan Jaya have been approved')                   
          ->send('Hi,'.'asal'. ' --------- ' . $username .' ---------- ' . $password . ' ---------- ' . 'For more information go open http://localhost/aa/');
      } 
      catch (Exception $e) {
        echo 'Exception : ',  $e->getMessage(), "\n";
      }
      return $this->redirect(['action' => 'index']);
    }

    // public function addCompany($id = null)
    // {
    //   $regCompany = $this->RegCompanies->get($id); 
    //   $userID = $this->addUser($id);
    //   $data = [
    //         'id'=>$userID,
    //         'name'=> $regCompany->name,
    //         'address'=>$regCompany->address,
    //         'phone'=>$regCompany->phone,
    //         'fax'=>$regCompany->fax,
    //         'email'=>$regCompany->email,
    //         'web'=>$regCompany->web,
    //         'industry'=>$regCompany->industry,
    //         'logo'=>$regCompany->logo,
    //         'cp_name'=>$regCompany->cp_name,
    //         'cp_position'=>$regCompany->cp_position,
    //         'cp_phone'=>$regCompany->cp_phone,
    //         'cp_email'=>$regCompany->cp_email
    //   ];
    //   $Companies = TableRegistry::get('Companies');
    //   $company = $Companies->newEntity($data, [
    //       'user_id'=>'id',
    //       'name'=>'name',
    //       'address'=>'address',
    //       'phone'=>'phone',
    //       'fax'=>'fax',
    //       'email'=>'email',
    //       'web'=>'web',
    //       'industry'=>'industry',
    //       'logo'=>'logo',
    //       'cp_name'=>'cp_name',
    //       'cp_position'=>'cp_position',
    //       'cp_phone'=>'cp_phone',
    //       'cp_email'=>'cp_email'
    //   ]);
    //   $Companies->save($company);
    //   return $this->redirect(['action' => 'mailUser']);
    // }
}



