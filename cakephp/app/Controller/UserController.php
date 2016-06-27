<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
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
	public $components = array('Paginator', 'Flash', 'Session');

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
	}
	public function signup(){
		if ($this->request->is('post')) {
            $this->User->create();
            try{
	            if($this->User->save($this->request->data)) {
	                $this->Flash->success('新規登録登録が完了しました');
	                return $this->redirect(array('action' => 'index'));
	            }
        	}catch(Exception $e){
            	$this->Flash->error('そのユーザは登録できません');
        	}
        }
	}

}
