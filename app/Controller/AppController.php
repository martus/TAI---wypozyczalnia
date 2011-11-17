<?php
class AppController extends Controller {
    public $components = array(
        'Acl',
        'Auth' => array(
    		'loginRedirect' => array('controller' => 'films', 'action' => 'add'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
    		'fields' => array('username' => 'e-mail', 'password' => 'password'),
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session'
    );
    public $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() {
    	$this->Auth->allow('*');
        //Configure AuthComponent
        /*$this->Auth->userModel = 'User';
        $this->Auth->allow('display');
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
        $this->Auth->fields = array('username' => 'e-mail', 'password' => 'password');
        $this->Auth->authorize = 'controller';*/
		
		//  Additional criteria for loging.
		//$this->Auth->userScope = array('User.active' => 1); //user needs to be active.
    }
	/*public function isAuthorized($user) {
	    if (isset($user['role_id']) && $user['role_id'] === 1) {
	        return true; //Admin can access every action
	    }
	    return false; // The rest don't*/
	//}
}