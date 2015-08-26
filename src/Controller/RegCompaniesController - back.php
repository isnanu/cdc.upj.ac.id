<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
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
          $this->request->data['logo'] = $dir.DS.Text::uuid().'-'.$filename;
          $allowed = array('png', 'jpg', 'jpeg');
          if ( !in_array( substr( strrchr( $filename , '.') , 1 ) , $allowed) ) 
          {
            throw new InternalErrorException("Error Processing Request.", 1);   
          }
          elseif( is_uploaded_file( $file_tmp_name ) )
          {
            move_uploaded_file($file_tmp_name, $dir.DS.Text::uuid().'-'.$filename);
          }            
          if ($this->RegCompanies->save($regCompany)) {
            $cdcMail = 'cdc.upj@gmail.com';
            $emailAdmin = '4dm1n.cdc@gmail.com';

            $email = new Email();
            $email->transport('mailjet');


            try {
                $res = $email->from($cdcMail)
                      ->to([$emailAdmin => 'Admin Career Development Center UPJ'])
                      ->subject('CDC : New Registration Need Approval')                   
                      ->send("Some company want to join with us and need approval from you. For more information go open http://localhost/aaa/reg_companies/");

            } catch (Exception $e) {

                echo 'Exception : ',  $e->getMessage(), "\n";

            }
            $this->Flash->greatSuccess(__('The reg company has been saved. username atau Password kamu akan di email')); 
            return $this->redirect(['controller'=>'users','action' => 'login']);
          } 
          else 
          {
            $this->Flash->error(__('The reg company could not be saved. Please, try again.'));
          }

        }            
        $this->set(compact('regCompany'));
        $this->set('_serialize', ['regCompany']);
    }

    // public function upload()
    // {
    //     if ( !empty( $this->request->data ) ) {
    //         $this->UploadRegCompany->send($this->request->data['uploadfile']);
    //     }
    // }
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
        if ($this->RegCompanies->delete($regCompany)) {
            $this->Flash->success(__('The reg company has been deleted.'));
        } else {
            $this->Flash->error(__('The reg company could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function approve($id = null)
    {
      $RegCompaniesTable = TableRegistry::get('RegCompanies');         
      $regCompany = $this->RegCompanies->get($id);     
      $regCompany = $RegCompaniesTable->get($regCompany->id); 

      $regCompany->Approval = '1';                
      return $this->redirect(['action' => 'mailtouser']);
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

    public function username() {
      $username = $this->random();
      return $username;
    }

    public function password() {
      $password = $this->random();
      return $password;
    }

    // public function tempTable(){ 
      
    //   $username = $this->Username();
    //   $password = $this->Password();

    //   $maketemp = "
    //     CREATE TEMPORARY TABLE temp_table (
    //       'Id' int NOT NULL,
    //       'username' varchar(8),
    //       'pass' varchar(8),
    //       PRIMARY KEY(Id)
    //     )
    //   "; 

    //   $inserttemp = "
    //     INSERT INTO temp_table
    //       ('username', 'pass')
    //     VALUE ($username , $password)
    //   ";

    //   mysql_query($inserttemp, $connection) or die ("Sql error : ".mysql_error());
      
    //   $id = mysql_query(" SELECT 'username' FROM temp_table", $connection) or die ("Sql error : ".mysql_error());
    //   $pass = mysql_query(" SELECT 'pass' FROM temp_table", $connection) or die ("Sql error : ".mysql_error());

    //   $result = [$id, $pass];

    //   return $result;
    // }

    public function adduser(){
      $UsersTable = TableRegistry::get('Users');
      $user = $UsersTable->newEntity();
      
      $user->username = $this->tempTable()[0];
      $user->password = $this->tempTable()[1];
      $user->role_id = '2';
      
      if ($UsersTable->save($user)) {
        $this->Flash->success(__('The reg company has been approved, and has been saved.'));        
      } 
      else {
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }

      $this->set(compact('user', 'roles'));
      $this->set('_serialize', ['user']);

      return $user->id;
    }

    public function mailtouser(){      
      $cdcMail = 'cdc.upj@gmail.com';
      // $emailuser = $this->request->data['cp_email'];
      $emailAdmin = '4dm1n.cdc@gmail.com';

      $id = $this->adduser()[0];
      $pass = $this->tempTable()[1];

      $UsersTable = TableRegistry::get('Users');    
      $user = $UsersTable->get($id);
      $username = $user->username;

      $email = new Email();
      $email->transport('mailjet');
      // $email->template('pesan');

      try {
        $res = $email->from($cdcMail)
          ->to([$emailAdmin => 'asal'])
          ->subject('Your registration on Career Development Center Universitas Pembangunan Jaya have been approved')                   
          ->send('Hi,'.'asal'. ' --------- ' . $username .' ---------- ' . $pass . ' ---------- ' . 'For more information go open http://localhost/aa/');
      } 
      catch (Exception $e) {
        echo 'Exception : ',  $e->getMessage(), "\n";
      }
      // conn close;
      return $this->redirect(['action' => 'index']);
    }

    public function addcompany(){

    } 
}



