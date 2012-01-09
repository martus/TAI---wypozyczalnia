<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 */
class ClientsController extends AppController {

	var $uses = array('Hire', 'Client');
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->Client->recursive = 0;
		$this->set('clients', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		$this->set('client', $this->Client->read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Client->create();
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Client->read(null, $id);
		}
		$countries = $this->Client->Country->find('list');
		$users = $this->Client->User->find('list');
		$this->set(compact('countries','users'));
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
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->Client->delete()) {
			$this->Session->setFlash(__('Client deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Client was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function profile(){
		$this->Client->recursive = 2;
		$uid = $this->Auth->user('id');
		$this->Client->user_id = $uid;
		//$condition = 'user_id = '.$uid.'';
		$a = array();
		
		$a = $this->Client->find('all', array('conditions' => array("user_id"=>"$uid")));
		$b = $this->Hire->query("select * from hires join films f on f.id=hires.film_id where user_id=$uid ORDER BY expiry_date DESC");
		$this->set('hires', $a[0]);
		$this->set('hire', $b);
		//debug($b[0]['hires']);
		$id = $a[0]['Client']['id'];
		$country_id = $a[0]['Client']['country_id'];
		$this->edit_profile($id, $country_id);
		
	}

	public function edit_profile($id, $country_id) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('Zmiany zostały zapisane!'));
				$this->redirect(array('action' => 'profile'));
			} else {
				$this->Session->setFlash(__('Nie można zapisać zmian. Spróbuj ponownie.'));
			}
		} else {
			$this->request->data = $this->Client->read(null, $id);
		}
		$countries = $this->Client->Country->find('list');
		$users = $this->Client->User->find('list');
		$this->set('countr_id',$country_id);
		$this->set(compact('countries','users'));
		
	}

}