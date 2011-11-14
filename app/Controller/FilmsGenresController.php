<?php
App::uses('AppController', 'Controller');
/**
 * FilmsGenres Controller
 *
 * @property FilmsGenre $FilmsGenre
 */
class FilmsGenresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FilmsGenre->recursive = 0;
		$this->set('filmsGenres', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FilmsGenre->id = $id;
		if (!$this->FilmsGenre->exists()) {
			throw new NotFoundException(__('Invalid films genre'));
		}
		$this->set('filmsGenre', $this->FilmsGenre->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FilmsGenre->create();
			if ($this->FilmsGenre->save($this->request->data)) {
				$this->Session->setFlash(__('The films genre has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The films genre could not be saved. Please, try again.'));
			}
		}
		$genres = $this->FilmsGenre->Genre->find('list');
		$films = $this->FilmsGenre->Film->find('list');
		$this->set(compact('genres', 'films'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FilmsGenre->id = $id;
		if (!$this->FilmsGenre->exists()) {
			throw new NotFoundException(__('Invalid films genre'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FilmsGenre->save($this->request->data)) {
				$this->Session->setFlash(__('The films genre has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The films genre could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FilmsGenre->read(null, $id);
		}
		$genres = $this->FilmsGenre->Genre->find('list');
		$films = $this->FilmsGenre->Film->find('list');
		$this->set(compact('genres', 'films'));
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
		$this->FilmsGenre->id = $id;
		if (!$this->FilmsGenre->exists()) {
			throw new NotFoundException(__('Invalid films genre'));
		}
		if ($this->FilmsGenre->delete()) {
			$this->Session->setFlash(__('Films genre deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Films genre was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
