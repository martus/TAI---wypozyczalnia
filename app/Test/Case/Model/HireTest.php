<?php
/* Hire Test cases generated on: 2011-11-14 14:41:25 : 1321278085*/
App::uses('Hire', 'Model');

/**
 * Hire Test Case
 *
 */
class HireTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.hire', 'app.client', 'app.country', 'app.person', 'app.film', 'app.film_type', 'app.copy', 'app.countries_film', 'app.genre', 'app.films_genre', 'app.films_person');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Hire = ClassRegistry::init('Hire');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hire);

		parent::tearDown();
	}

}
