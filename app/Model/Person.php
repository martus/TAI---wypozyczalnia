<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 * @property Country $Country
 * @property Film $Film
 * @property Type $Type
 */
class Person extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	var $name = 'Person';
	public $displayField = 'name';
	
	public $validate = array(
		'name' => array(
/*			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Not empty',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),*/
			'length' => array( 
            	'rule' => array('maxLength', 255),
				'message' => 'Za długa nazwa.'
        	),
        ),
        'surname' => array(
        'length' => array( 
            	'rule' => array('maxLength', 255),
				'message' => 'Za długa nazwa!'
        	),
        ),
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Film' => array(
			'className' => 'Film',
			'joinTable' => 'films_people',
			'foreignKey' => 'person_id',
			'associationForeignKey' => 'film_id',
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
		'Type' => array(
			'className' => 'Type',
			'joinTable' => 'people_types',
			'foreignKey' => 'person_id',
			'associationForeignKey' => 'type_id',
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
