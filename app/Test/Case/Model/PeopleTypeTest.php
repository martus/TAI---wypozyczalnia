<?php
/* PeopleType Test cases generated on: 2011-11-14 14:41:43 : 1321278103*/
App::uses('PeopleType', 'Model');

/**
 * PeopleType Test Case
 *
 */
class PeopleTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.people_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PeopleType = ClassRegistry::init('PeopleType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeopleType);

		parent::tearDown();
	}

}
