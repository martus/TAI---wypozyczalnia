<?php
/* Genre Test cases generated on: 2011-11-14 14:41:17 : 1321278077*/
App::uses('Genre', 'Model');

/**
 * Genre Test Case
 *
 */
class GenreTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.genre', 'app.film', 'app.film_type', 'app.copy', 'app.hire', 'app.country', 'app.client', 'app.person', 'app.countries_film', 'app.films_genre', 'app.films_person');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Genre = ClassRegistry::init('Genre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Genre);

		parent::tearDown();
	}

}
