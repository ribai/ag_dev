<?php
App::uses('AppController', 'Controller');
/**
 * Index Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class IndexController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	public $uses = array('User','Lecture');

	public function index(){
		$user = $this->User->find('all');
		$lecture = $this->Lecture->find('all');
		$this->set(compact('user','lecture'));
	}

}
