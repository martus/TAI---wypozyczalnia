<?php
App::uses('AppModel', 'Model');
/**
 * FilmsGenre Model
 *
 * @property Genre $Genre
 * @property Film $Film
 */
class FilmsGenre extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'genre_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'film_id' => array(
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
		'Genre' => array(
			'className' => 'Genre',
			'foreignKey' => 'genre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Film' => array(
			'className' => 'Film',
			'foreignKey' => 'film_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
