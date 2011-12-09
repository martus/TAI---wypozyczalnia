<?php
class CartsController extends AppController {

	var $uses = array('Film', 'Hire');

	public function add_to_cart($id) {
		$cond = 'Film.id = '.$id.'';
		$return_data = $this->Film->find('all',array('conditions'=>$cond));
		$return_data = array_merge($return_data[0]['Film'], $return_data[0]['FilmType']);
		print_r($return_data);
		$this->Session->write('Cart.'.count($this -> Session -> read('Cart')), $return_data);
		print_r(key($return_data));
		$this->redirect(array('action' => 'index'));
	}

	public function index() {
		//debug($this -> Session -> read());
		$this->set('carts', $this -> Session -> read('Cart'));
		
	}

	public function delete($id) {
		//CakeSession::delete('Cart');
		$data = $this -> Session -> read('Cart');
		for($i=0; $i < count($data); $i++) {
			if($data[$i]['id']==$id) {
				CakeSession::delete('Cart.'.$i);
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function add_hire() {
		$data = $this -> Session -> read('Cart');
		$user_id = $this->Auth->user('id');

		if(!empty($data)){
			for($i=0; $i < count($data); $i++) {
				$film_id = $data[$i]['id'];
				$hire_date = date('Y-m-d', strtotime("+7 days"));
				$sql = 'INSERT INTO hires values(null,"'.$hire_date.'",'.$user_id.','.$film_id.')';
				$this->Hire->query($sql);
			}
			//usuniecie zamowien z koszyka
			CakeSession::delete('Cart');
			$this->Session->setFlash('Zamówienia zostały dodane - filmy bedą aktywne do tygodnia!');
		}else {
			echo 'Brak zamówień w koszyku';
		}
		$this->redirect(array('action' => 'index'));
	}

}