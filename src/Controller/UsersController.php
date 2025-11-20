<?php 

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\Locator\LocatorAwareTrait;

/**
 */
class UsersController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');

        $this->UserMst = $this->fetchTable('UserMst');  
    }
    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if($this->request->is('post')) {
            $data = $this->request->getData();
            $type = $data['user_type'];
            $username = $data['username'];
            $password = $data['password'];

            
                $Users = $this->fetchTable('UserMst');
                $user = $Users->find()->where(['username' => $username, 'password' => $password, 'user_type' => $type])->first();
                if($user) {
                    $this->request->getSession()->write('user', $user);
                    $this->redirect(['controller' => 'Users', 'action' => 'index']);
                } else {
                    $this->Flash->error('Invalid username or password');
                }
            $this->set('data', $data);
        }
        
    }
    public function index()
    {
        $session=$this->request->getSession();
        $user=$session->read('user');
       
        if(!$session->check('user')){
            return $this->redirect(['action'=>'login']);
        }


        $this->set('user', $user);
    }
}