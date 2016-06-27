<?php
App::uses('AppModel', 'Model');
App::uses('User','Model');
/**
 * User Model
 *
 */
class Comment extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	//public $hasOne = array('User' => array(
	//						'className' => 'User',
	//					));

	public function get_comment_by_lecture($lecture_id){
		$conditions = array('lecture_id' => $lecture_id);
		return $this->find('all',array('conditions' => $conditions));
	}

}
