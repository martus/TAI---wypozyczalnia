<?php
class CartsController extends AppController {

	var $uses = array('Film', 'Hire', 'Cart');

	public function add_to_cart($id) {
		$cond = 'Film.id = '.$id.'';
		$return_data = $this->Film->find('all',array('conditions'=>$cond));
		$return_data = array_merge($return_data[0]['Film'], $return_data[0]['FilmType']);
		$return_data['id'] = $id;
		$this->Session->write('Cart.'.$id, $return_data);//count($this -> Session -> read('Cart'))
		$this->redirect(array('action' => 'index'));
	}

	public function index() {
		//debug($this -> Session -> read());
		$this->set('carts', $this -> Session -> read('Cart'));
	}

	public function delete($id) {
		//CakeSession::delete('Cart');
		$data = $this -> Session -> read('Cart');
		foreach ($data as $d) {
			if($d['id']==$id) {
				CakeSession::delete('Cart.'.$id);

				if(count($data)==1){
					CakeSession::delete('Cart');
					$this->redirect(array('controller' => 'films', 'action' => 'index'));
				}else {
					$this->redirect(array('action' => 'index'));
				}
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

				$sql = 'INSERT INTO hires values(null,"'.$hire_date.'", '.$user_id.','.$film_id.', "aktywny")';
				$this->Hire->query($sql);
			}
			//usuniecie zamowien z koszyka
			CakeSession::delete('Cart');
			$this->Session->setFlash('Zamówienia zostały dodane - filmy aktywowane!');
		}else {
			echo 'Brak zamówień w koszyku';
		}
		$this->redirect(array('action' => 'index'));
	}

}