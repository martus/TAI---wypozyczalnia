<?php
App::uses('AppController', 'Controller');
/**
 * FilmTypes Controller
 *
 * @property FilmType $FilmType
 */
class FilmTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FilmType->recursive = 0;
		$this->set('filmTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FilmType->id = $id;
		if (!$this->FilmType->exists()) {
			throw new NotFoundException(__('Invalid film type'));
		}
		$this->set('filmType', $this->FilmType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FilmType->create();
			if ($this->FilmType->save($this->request->data)) {
				$this->Session->setFlash(__('The film type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The film type could not be saved. Please, try again.'));
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
		$this->FilmType->id = $id;
		if (!$this->FilmType->exists()) {
			throw new NotFoundException(__('Invalid film type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FilmType->save($this->request->data)) {
				$this->Session->setFlash(__('The film type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The film type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FilmType->read(null, $id);
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
		$this->FilmType->id = $id;
		if (!$this->FilmType->exists()) {
			throw new NotFoundException(__('Invalid film type'));
		}
		if ($this->FilmType->delete()) {
			$this->Session->setFlash(__('Film type deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Film type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
