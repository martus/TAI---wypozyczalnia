<?php
App::uses('AppModel', 'Model', 'AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Role $Role
 */
class User extends Model {
	public $name = 'User';
    public $actsAs = array('Acl' => array('type' => 'requester'));
    /**
 * Display field
 *
 * @var string
 */
	public $displayField = 'e-mail';
	
    public $validate = array(
		'e-mail' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'role_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'active' => array(
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
    
	/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
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
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Hire' => array(
			'className' => 'Hire',
			'foreignKey' => 'user_id',
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
	
	function bindNode($user) {
	    return array('model' => 'Role', 'foreign_key' => $user['User']['role_id']);
	}

	public function beforeSave() {
        if (isset($this->data['User']['password'])) {
        	$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
    	}
    	return true;
    }
	public function parentNode() {
		if (!$this->id) {
            return null;
        }
        $data = $this->read();
        if (!$data['User']['role_id']){
            return null;
        } else {
            return array('model' => 'Role', 'foreign_key' => $data['User']['role_id']);
        }
        /*if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['role_id'])) {
            $roleId = $this->data['User']['role_id'];
        } else {
            $roleId = $this->field('role_id');
        }
        if (!$roleId) {
            return null;
        } else {
            return array('Role' => array('id' => $roleId));
        }*/
    }
    
	function get_client_id($user_id) {
		$sql = 'select client_id from users where id='.$user_id.'';
		$cli=$this->query($sql);
		return $cli[0]['users']['client_id'];
	}
}
