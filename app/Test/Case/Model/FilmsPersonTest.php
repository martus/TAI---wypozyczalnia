<?php
/* FilmsPerson Test cases generated on: 2011-11-14 14:41:08 : 1321278068*/
App::uses('FilmsPerson', 'Model');

/**
 * FilmsPerson Test Case
 *
 */
class FilmsPersonTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.films_person', 'app.film', 'app.film_type', 'app.copy', 'app.hire', 'app.country', 'app.client', 'app.person', 'app.countries_film', 'app.genre', 'app.films_genre', 'app.person_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->FilmsPerson = ClassRegistry::init('FilmsPerson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FilmsPerson);

		parent::tearDown();
	}

}
