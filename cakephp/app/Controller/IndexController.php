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


	public function index(){
		$now_day = 2;
		$now_time = 4;

		$user = $this->User->find('all');
		$lecture = $this->Lecture->find('all');

		//現在開講中の講義
		$now_lecture = $this->Lecture->get_lecture($now_day,$now_time);
		$now_lecture = $this->Lecture->convert_by_room($now_lecture);
		$this->set(compact('user','lecture','now_lecture'));
	}

}
