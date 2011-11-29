<?php
class CartsController extends AppController {
	
	var $uses = array('Film');
	
	public function add_to_cart($id) {
		$cond = 'Film.id = '.$id.'';
		//jesli dzialamy na kopiach=egzemplarzach to trzeba sparwdzic czy dana kopia jest wolna
		$return_data = $this->Film->find('all',array('conditions'=>$cond 
	/*		'joins' => array(
			'table' => 'Copies',
			'alias' => 'c',
			'type' => 'INNER',
			'conditions' => array(
				'c.film_id = Film.id'
			))*/
		));
		$return_data = array_merge($return_data[0]['Film'], $return_data[0]['FilmType']);
		print_r($return_data);
		$this->Session->write('Cart.'.$id, $return_data);
		$this->redirect(array('action' => 'index'));
		//count($this -> Session -> read('Cart'))
	}
	
	public function index() {
		//print_r($this -> Session -> read('Cart'));//
		$this->set('carts', $this -> Session -> read('Cart'));
	}
	
	public function delete($id) {
		CakeSession::delete('Cart.'.$id);
		$this->redirect(array('action' => 'index'));
	}
}