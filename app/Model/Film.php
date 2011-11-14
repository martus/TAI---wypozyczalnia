<?php
App::uses('AppModel', 'Model');
/**
 * Film Model
 *
 * @property FilmType $FilmType
 * @property Copy $Copy
 * @property Country $Country
 * @property Genre $Genre
 * @property Person $Person
 */
class Film extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'film_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'FilmType' => array(
			'className' => 'FilmType',
			'foreignKey' => 'film_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Copy' => array(
			'className' => 'Copy',
			'foreignKey' => 'film_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Country' => array(
			'className' => 'Country',
			'joinTable' => 'countries_films',
			'foreignKey' => 'film_id',
			'associationForeignKey' => 'country_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Genre' => array(
			'className' => 'Genre',
			'joinTable' => 'films_genres',
			'foreignKey' => 'film_id',
			'associationForeignKey' => 'genre_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'joinTable' => 'films_people',
			'foreignKey' => 'film_id',
			'associationForeignKey' => 'person_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
