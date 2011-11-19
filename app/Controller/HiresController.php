<?php
App::uses('AppController', 'Controller');
/**
 * Hires Controller
 *
 * @property Hire $Hire
 */
class HiresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hire->recursive = 0;
		$this->set('hires', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Hire->id = $id;
		if (!$this->Hire->exists()) {
			throw new NotFoundException(__('Invalid hire'));
		}
		$this->set('hire', $this->Hire->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hire->create();
			if ($this->Hire->save($this->request->data)) {
				$this->Session->setFlash(__('The hire has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hire could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Hire->Client->find('list');
		$copies = $this->Hire->Copy->find('list');
		$this->set(compact('clients', 'copies'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Hire->id = $id;
		if (!$this->Hire->exists()) {
			throw new NotFoundException(__('Invalid hire'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hire->save($this->request->data)) {
				$this->Session->setFlash(__('The hire has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hire could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Hire->read(null, $id);
		}
		$clients = $this->Hire->Client->find('list');
		$copies = $this->Hire->Copy->find('list');
		$this->set(compact('clients', 'copies'));
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
		$this->Hire->id = $id;
		if (!$this->Hire->exists()) {
			throw new NotFoundException(__('Invalid hire'));
		}
		if ($this->Hire->delete()) {
			$this->Session->setFlash(__('Hire deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hire was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
