<?php
App::uses('AppModel', 'Model');
/**
 * Copy Model
 *
 * @property Film $Film
 * @property Hire $Hire
 */
class Copy extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'Film' => array(
			'className' => 'Film',
			'foreignKey' => 'film_id',
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
		'Hire' => array(
			'className' => 'Hire',
			'foreignKey' => 'copy_id',
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
	
	public function is_accessble_copy($film_id) {
		$sql = 'SELECT id FROM copies
				WHERE film_id = '.$film_id.' and (id) NOT IN
				(SELECT copy_id FROM hires where end_date is null) limit 1';
		$copy_id=$this->query($sql);
		return  $copy_id[0]['copies']['id'];
	}

}
