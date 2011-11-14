<?php
/* FilmType Test cases generated on: 2011-11-14 14:40:33 : 1321278033*/
App::uses('FilmType', 'Model');

/**
 * FilmType Test Case
 *
 */
class FilmTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.film_type', 'app.film');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->FilmType = ClassRegistry::init('FilmType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FilmType);

		parent::tearDown();
	}

}
