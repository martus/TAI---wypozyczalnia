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
	function bindNode($user) {
	    return array('model' => 'Role', 'foreign_key' => $user['User']['role_id']);
	}
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'e-mail';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role'
	);
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
}
