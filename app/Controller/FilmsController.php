<?php
App::uses('AppController', 'Controller');
/**
 * Films Controller
 *
 * @property Film $Film
 */
class FilmsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Film->recursive = 0;
		$this->set('films', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Film->id = $id;
		if (!$this->Film->exists()) {
			throw new NotFoundException(__('Invalid film'));
		}
		$this->set('film', $this->Film->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Film->create();
			if ($this->Film->save($this->request->data)) {
				$this->Session->setFlash(__('The film has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The film could not be saved. Please, try again.'));
			}
		}
		$filmTypes = $this->Film->FilmType->find('list');
		$countries = $this->Film->Country->find('list');
		$genres = $this->Film->Genre->find('list');
		$people = $this->Film->Person->find('list');
		$this->set(compact('filmTypes', 'countries', 'genres', 'people'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Film->id = $id;
		if (!$this->Film->exists()) {
			throw new NotFoundException(__('Invalid film'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Film->save($this->request->data)) {
				$this->Session->setFlash(__('The film has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The film could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Film->read(null, $id);
		}
		$filmTypes = $this->Film->FilmType->find('list');
		$countries = $this->Film->Country->find('list');
		$genres = $this->Film->Genre->find('list');
		$people = $this->Film->Person->find('list');
		$this->set(compact('filmTypes', 'countries', 'genres', 'people'));
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
		$this->Film->id = $id;
		if (!$this->Film->exists()) {
			throw new NotFoundException(__('Invalid film'));
		}
		if ($this->Film->delete()) {
			$this->Session->setFlash(__('Film deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Film was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
