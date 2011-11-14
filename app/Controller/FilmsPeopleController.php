<?php
App::uses('AppController', 'Controller');
/**
 * FilmsPeople Controller
 *
 * @property FilmsPerson $FilmsPerson
 */
class FilmsPeopleController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FilmsPerson->recursive = 0;
		$this->set('filmsPeople', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FilmsPerson->id = $id;
		if (!$this->FilmsPerson->exists()) {
			throw new NotFoundException(__('Invalid films person'));
		}
		$this->set('filmsPerson', $this->FilmsPerson->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FilmsPerson->create();
			if ($this->FilmsPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The films person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The films person could not be saved. Please, try again.'));
			}
		}
		$films = $this->FilmsPerson->Film->find('list');
		$people = $this->FilmsPerson->Person->find('list');
		$personTypes = $this->FilmsPerson->PersonType->find('list');
		$this->set(compact('films', 'people', 'personTypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FilmsPerson->id = $id;
		if (!$this->FilmsPerson->exists()) {
			throw new NotFoundException(__('Invalid films person'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FilmsPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The films person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The films person could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FilmsPerson->read(null, $id);
		}
		$films = $this->FilmsPerson->Film->find('list');
		$people = $this->FilmsPerson->Person->find('list');
		$personTypes = $this->FilmsPerson->PersonType->find('list');
		$this->set(compact('films', 'people', 'personTypes'));
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
		$this->FilmsPerson->id = $id;
		if (!$this->FilmsPerson->exists()) {
			throw new NotFoundException(__('Invalid films person'));
		}
		if ($this->FilmsPerson->delete()) {
			$this->Session->setFlash(__('Films person deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Films person was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
