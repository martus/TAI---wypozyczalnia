<?php
App::uses('AppController', 'Controller');
/**
 * CountriesFilms Controller
 *
 * @property CountriesFilm $CountriesFilm
 */
class CountriesFilmsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CountriesFilm->recursive = 0;
		$this->set('countriesFilms', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CountriesFilm->id = $id;
		if (!$this->CountriesFilm->exists()) {
			throw new NotFoundException(__('Invalid countries film'));
		}
		$this->set('countriesFilm', $this->CountriesFilm->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CountriesFilm->create();
			if ($this->CountriesFilm->save($this->request->data)) {
				$this->Session->setFlash(__('The countries film has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The countries film could not be saved. Please, try again.'));
			}
		}
		$countries = $this->CountriesFilm->Country->find('list');
		$films = $this->CountriesFilm->Film->find('list');
		$this->set(compact('countries', 'films'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CountriesFilm->id = $id;
		if (!$this->CountriesFilm->exists()) {
			throw new NotFoundException(__('Invalid countries film'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CountriesFilm->save($this->request->data)) {
				$this->Session->setFlash(__('The countries film has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The countries film could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CountriesFilm->read(null, $id);
		}
		$countries = $this->CountriesFilm->Country->find('list');
		$films = $this->CountriesFilm->Film->find('list');
		$this->set(compact('countries', 'films'));
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
		$this->CountriesFilm->id = $id;
		if (!$this->CountriesFilm->exists()) {
			throw new NotFoundException(__('Invalid countries film'));
		}
		if ($this->CountriesFilm->delete()) {
			$this->Session->setFlash(__('Countries film deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Countries film was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
