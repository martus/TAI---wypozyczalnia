<?php
App::uses('AppController', 'Controller', 'AuthComponent');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
	var $name = 'Users'; 
	var $components = array('MathCaptcha'); 
	
	
function beforeFilter() {
    parent::beforeFilter();
    //$this->Auth->allow('initDB'); // We can remove this line after we're finished
		// If logged in, these pages require logout
		if ($this->Auth->user() && in_array($this->params['action'], array('signup', 'login'))) {
			$this->redirect('/');
		}
    //$this->Auth->allow('add', 'index', 'login','logout');
    
}

/* 
function initDB() {
	$group = $this->User->Role;

	

	//allow users
	$group->id = 3;
	$this->Acl->deny($group, 'controllers');
	$this->Acl->allow($group, 'controllers/Searches/');

	//we add an exit to avoid an ugly "missing views" error message
	echo "all done";
	exit;
} */

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	function login() {
		if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
		        switch($this->Auth->user('role_id')){
		    		case 1:
		    			return $this->redirect('/managements/admin');
		    			break;
		    		case 2:
		    			return $this->redirect('/managements/manager');
		    			break;
		    		case 3:
		    			return $this->redirect($this->Auth->redirect());
		    			break;
		    		default:
		    			return $this->redirect($this->Auth->redirect());
		    	}
	        } else {
	            $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
	        }
	    }
	}
	
	function logout() {
		$this->redirect($this->Auth->logout());
	    //Leave empty for now.
	}
	
	function register() {
		if ($this->request->is('post')) { 
             /*$this->Contact->set($this->data);
            if ($this->MathCaptcha->validates($this->data['Contact']['security_code'])) { 
                if ($this->Contact->validates()) { 
                    $this->Email->to = Configure::read('SiteSettings.email_form_address'); 
                    $this->Email->subject = 'Contact from message from ' . $this->data['Contact']['name']; 
                    $this->Email->from = $this->data['Contact']['email'];  

                    $this->Email->send($this->data['Contact']['comments']); 
                } 
            } else { 
                $this->Session->setFlash(__('Please enter the correct answer to the math question.', true)); 
            } */
        }  

        $this->set('mathCaptcha', $this->MathCaptcha->generateEquation()); 
	}
	
}
