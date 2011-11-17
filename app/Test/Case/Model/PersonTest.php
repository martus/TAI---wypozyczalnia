<?php
/* Person Test cases generated on: 2011-11-14 14:41:32 : 1321278092*/
App::uses('Person', 'Model');

/**
 * Person Test Case
 *
 */
class PersonTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.person', 'app.country', 'app.client', 'app.hire', 'app.copy', 'app.film', 'app.film_type', 'app.countries_film', 'app.genre', 'app.films_genre', 'app.films_person', 'app.type', 'app.people_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Person = ClassRegistry::init('Person');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Person);

		parent::tearDown();
	}

}
