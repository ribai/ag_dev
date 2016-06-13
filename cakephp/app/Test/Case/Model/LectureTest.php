<?php
App::uses('Lecture', 'Model');

/**
 * Lecture Test Case
 */
class LectureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lecture'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lecture = ClassRegistry::init('Lecture');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lecture);

		parent::tearDown();
	}

}
