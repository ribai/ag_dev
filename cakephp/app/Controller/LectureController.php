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
	public $uses = array('Comment');

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

	public function view() {

		if($this->request->is("post")){
			$data['Comment'] = $this->request->data;
			$this->Comment->save($data);
		}
		$lecture_id = $this->request->params['id'];
		$lecture = $this->Lecture->get_lecture_by_id($lecture_id);
		$lecture['Lecture']['day'] = $this->getDayByNum($lecture['Lecture']['day']);
		if(!empty($this->Session->read('Auth.User.id'))){
			$user['User']['id'] = $this->Session->read('Auth.User.id');
		}else{
			$user['User']['id'] = '';
		}
		$comments = $this->Comment->get_comment_by_lecture($lecture_id);
		$this->set(compact('user','lecture','comments'));
	}

}
