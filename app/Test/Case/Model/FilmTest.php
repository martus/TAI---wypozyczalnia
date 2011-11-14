<?php
/* Film Test cases generated on: 2011-11-14 14:40:44 : 1321278044*/
App::uses('Film', 'Model');

/**
 * Film Test Case
 *
 */
class FilmTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.film', 'app.film_type', 'app.copy', 'app.hire', 'app.country', 'app.client', 'app.person', 'app.countries_film', 'app.genre', 'app.films_genre', 'app.films_person');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Film = ClassRegistry::init('Film');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Film);

		parent::tearDown();
	}

}
