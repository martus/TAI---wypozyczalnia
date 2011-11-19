<?php
/* FilmsGenre Test cases generated on: 2011-11-14 14:40:53 : 1321278053*/
App::uses('FilmsGenre', 'Model');

/**
 * FilmsGenre Test Case
 *
 */
class FilmsGenreTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.films_genre', 'app.genre', 'app.film', 'app.film_type', 'app.copy', 'app.hire', 'app.country', 'app.client', 'app.person', 'app.countries_film', 'app.films_person');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->FilmsGenre = ClassRegistry::init('FilmsGenre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FilmsGenre);

		parent::tearDown();
	}

}
