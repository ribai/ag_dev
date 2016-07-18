<?php
App::uses('AppController', 'Controller');
/**
 * User Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Flash','Auth' => array(
											'loginRedirect' => array(
													'controller' => 'index',
													'action' => 'index'
													),
											'logoutRedirect' => array(
													'controller' => 'index',
													'action' => 'index',
													'home'
													),
											'authenticate' => array(
									                'Form' => array(
									                    'passwordHasher' => 'Blowfish'
									                )
									            )
											));


	public function beforeFilter(){

    	parent::beforeFilter();
    	$this->Auth->allow('signup', 'login');

	}

	public function index(){
		$now_day = 4;
		$now_time = 2;

		$user = $this->User->find('all');
		$lecture = $this->Lecture->find('all');

		//現在開講中の講義
		$now_lecture = $this->Lecture->get_lecture($now_day,$now_time);
		$now_lecture = $this->Lecture->convert_by_room($now_lecture);
		$this->set(compact('user','lecture','now_lecture'));
	}
	public function login(){
    	if($this->request->is('post')) {
      		if($this->Auth->login()){
        		$this->Flash->error('ログイン成功');
        		return $this->redirect('index');
      		}else{
        		$this->Flash->error('ログイン失敗');
        	}
    	}
  	}

  	public function logout(){
    	$this->Auth->logout();
    	$this->Flash->success('ログアウトしました');
    	$this->redirect('/');
  	}
	public function signup(){
		if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)){
                if($this->Auth->login()){
        			$this->Flash->success('以下の情報も任意で入力できます');
		        	return $this->redirect('edit');
		      	}else{
		        	$this->Flash->error('登録に失敗しました');
		            return $this->redirect(array('action' => 'login'));
		        }
		    }
            $this->Flash->error('登録に失敗しました');
        }
	}
	public function edit(){
		$this->set(array('user' => $this->Session->read('Auth.User')));
		if ($this->request->is('post')){
			$this->Log($this->request->data);
			if($this->User->save($this->request->data)){
				$this->Flash->success('ユーザ情報を保存しました');
			}else{
				$this->Flash->error('ユーザ情報を保存できませんでした');
			}
			$this->redirect(array('action' => 'index'));
		}
	}

}
