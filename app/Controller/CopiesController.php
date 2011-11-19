<?php
App::uses('AppController', 'Controller');
/**
 * Copies Controller
 *
 * @property Copy $Copy
 */
class CopiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Copy->recursive = 0;
		$this->set('copies', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Copy->id = $id;
		if (!$this->Copy->exists()) {
			throw new NotFoundException(__('Invalid copy'));
		}
		$this->set('copy', $this->Copy->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Copy->create();
			if ($this->Copy->save($this->request->data)) {
				$this->Session->setFlash(__('The copy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The copy could not be saved. Please, try again.'));
			}
		}
		$films = $this->Copy->Film->find('list');
		$this->set(compact('films'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Copy->id = $id;
		if (!$this->Copy->exists()) {
			throw new NotFoundException(__('Invalid copy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Copy->save($this->request->data)) {
				$this->Session->setFlash(__('The copy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The copy could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Copy->read(null, $id);
		}
		$films = $this->Copy->Film->find('list');
		$this->set(compact('films'));
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
		$this->Copy->id = $id;
		if (!$this->Copy->exists()) {
			throw new NotFoundException(__('Invalid copy'));
		}
		if ($this->Copy->delete()) {
			$this->Session->setFlash(__('Copy deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Copy was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
