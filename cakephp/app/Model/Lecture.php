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
		$lec = array();
		foreach ($lecture as $key => $value) {
			$room = $value['Lecture']['room'];
			$building_code = $this->get_building_code($room);

			if(array_key_exists($building_code, $lec)){
				array_push($lec[$building_code], $value['Lecture']);
			}else{
				$lec[$building_code][0] = $value['Lecture'];
			}
		}
		return $lec;
 	}
 	public function get_lecture_by_id($lecture_id){
 		return $this->find('first',array('conditions' => array(
										'id'  => $lecture_id,
								)));
 	}

 	//教室番号から棟を取得
 	public function get_building_code($room){
 		return substr($room, 0,1);
 	}

}

