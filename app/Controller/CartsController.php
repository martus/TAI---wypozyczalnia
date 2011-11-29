<?php
class CartsController extends AppController {
	
	var $uses = array('Film', 'Copy', 'Hire', 'User');
	
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
	
	public function add_hire($film_id) {
		$ret = '';
		//user musi byc zalogowany
		$user_id = $this->Session->read('Auth.User.id');
		$client = $this->User->get_client_id($user_id);
		//sprawdzenie czy jest dostepna kopia
		$copy_id =$this->Copy->is_accessble_copy($film_id);
		if(!empty($copy_id)){
			//zamowienie kopii
			$hire_date = date('Y-m-d');
			$sql = 'INSERT INTO hires values(null,"'.$hire_date.'",null,null,'.$clients.','.$copy_id.')';
			$this->Hire->query($sql);
			//zlikwidowanie filmu z koszyka 
			$this->delete($film_id);
		}else {
			$ret = 'Brak dostępnej kopii w magazynie';
		}				
		$this->set('ret', $ret);
		//$this->redirect(array('action' => 'index'));
	}
}