<?php
/* FilmsPerson Fixture generated on: 2011-11-14 14:41:07 : 1321278067 */

/**
 * FilmsPersonFixture
 *
 */
class FilmsPersonFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'film_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'person_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_films_directors_films1' => array('column' => 'film_id', 'unique' => 0), 'fk_films_directors_directors1' => array('column' => 'person_id', 'unique' => 0), 'fk_films_people_people_types1' => array('column' => 'person_type_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'film_id' => 1,
			'person_id' => 1,
			'person_type_id' => 1
		),
	);
}
