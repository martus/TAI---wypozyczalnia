<?php
App::uses('AppController', 'Controller');
/**
 * PeopleTypes Controller
 *
 * @property PeopleType $PeopleType
 */
class PeopleTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PeopleType->recursive = 0;
		$this->set('peopleTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PeopleType->id = $id;
		if (!$this->PeopleType->exists()) {
			throw new NotFoundException(__('Invalid people type'));
		}
		$this->set('peopleType', $this->PeopleType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeopleType->create();
			if ($this->PeopleType->save($this->request->data)) {
				$this->Session->setFlash(__('The people type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people type could not be saved. Please, try again.'));
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
		$this->PeopleType->id = $id;
		if (!$this->PeopleType->exists()) {
			throw new NotFoundException(__('Invalid people type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PeopleType->save($this->request->data)) {
				$this->Session->setFlash(__('The people type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PeopleType->read(null, $id);
		}
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
		$this->PeopleType->id = $id;
		if (!$this->PeopleType->exists()) {
			throw new NotFoundException(__('Invalid people type'));
		}
		if ($this->PeopleType->delete()) {
			$this->Session->setFlash(__('People type deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('People type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
