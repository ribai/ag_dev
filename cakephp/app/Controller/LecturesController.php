<?php
App::uses('AppController', 'Controller');
/**
 * Lectures Controller
 *
 * @property Lecture $Lecture
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 */
class LecturesController extends AppController {

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

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lecture->exists($id)) {
			throw new NotFoundException(__('Invalid lecture'));
		}
		$options = array('conditions' => array('Lecture.' . $this->Lecture->primaryKey => $id));
		$this->set('lecture', $this->Lecture->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lecture->create();
			if ($this->Lecture->save($this->request->data)) {
				return $this->flash(__('The lecture has been saved.'), array('action' => 'index'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lecture->exists($id)) {
			throw new NotFoundException(__('Invalid lecture'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lecture->save($this->request->data)) {
				return $this->flash(__('The lecture has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Lecture.' . $this->Lecture->primaryKey => $id));
			$this->request->data = $this->Lecture->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lecture->id = $id;
		if (!$this->Lecture->exists()) {
			throw new NotFoundException(__('Invalid lecture'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lecture->delete()) {
			return $this->flash(__('The lecture has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The lecture could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}
