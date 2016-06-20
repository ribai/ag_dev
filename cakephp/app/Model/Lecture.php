<?php
App::uses('AppModel', 'Model');
/**
 * Lecture Model
 *
 */
class Lecture extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $uses = array('Comment');

	//Get lecture selected by day and time.
	public function get_lecture($day,$time){
		return $this->find('all',array('conditions' => array(
										'day'  => $day,
										'time' => $time,
								)));
	}

	public function convert_by_room($lecture){
		$res_les = array();
		foreach ($lecture as $key => $les) {
			$target = $this->find('all',array('condition' => array(
										'room' => $les['Lecture']['room']
										),
										'fields' => array('room','name')
									));
			foreach ($target as $key2 => $les2) {
				array_push($res_les[$les2['Lecture']['room']],$les2['Lecture']['name']);
			}
		}
		return $res_les;
 	}
 	public function get_lecture_by_id($lecture_id){
 		return $this->find('first',array('conditions' => array(
										'id'  => $lecture_id,
								)));
 	}

}

