<?php
class AppController extends Controller {
    public $components = array(
        'Acl',
        'Auth' => array(
    		'authenticate' => array(
    			'Form' => array(
    				'userModel' => 'User',
    				'fields' => array('username' => 'e-mail'),
    				'scope' => array('active' => 1)
    			)
	        ),
	        'loginRedirect' => array('controller' => 'films', 'action' => 'add'),
	        'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
	        'authError' => 'Błędny e-mail, hasło, albo konto nie zostało aktywowane.',
        ),
        'Session'
    );
    public $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() {
    	$this->Auth->allow('register');
    	switch($this->Auth->user('role_id')){
    		case 1:
    			$this->layout = 'admin';
    			break;
    		case 2:
    			$this->layout = 'manager';
    			break;
    		case 3:
    			$this->layout = 'loggedin';
    			break;
    		default:
    			//$this->Auth->user('role_id')=4;
    			$this->layout = 'default';
    	}
    }
	public function isAuthorized($user) {
	    if (isset($user['role_id']) && $user['role_id'] === 1) {
	        return true; //Admin can access every action
	    }
	    return false; // The rest don't*/
	}
}