<?php
/* CountriesFilm Test cases generated on: 2011-11-14 14:39:12 : 1321277952*/
App::uses('CountriesFilm', 'Model');

/**
 * CountriesFilm Test Case
 *
 */
class CountriesFilmTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.countries_film', 'app.country', 'app.client', 'app.hire', 'app.person', 'app.film');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CountriesFilm = ClassRegistry::init('CountriesFilm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CountriesFilm);

		parent::tearDown();
	}

}
