<?php
App::uses('AppController', 'Controller');
/**
 * Lectures Controller
 *
 * @property Lecture $Lecture
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 */
class LectureController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$user = $this->User->find('all');
		$lecture = $this->Lecture->find('all');
		$this->set(compact('user','lecture'));
	}

	public function view($id=NULL) {

	}

}
