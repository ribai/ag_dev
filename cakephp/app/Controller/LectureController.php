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
		$this->Lecture->recursive = 0;
		$this->set('lectures', $this->Paginator->paginate());
	}

	public function view($id=NULL) {

	}

}
