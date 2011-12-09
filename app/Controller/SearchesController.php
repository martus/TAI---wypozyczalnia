<?php
class SearchesController extends AppController {

	var $name = 'Searches';
	var $components = array('Auth');
	var $uses = array('Film', 'Person', 'Genre');


	function beforeFilter()
	{
		parent::beforeFilter();
	}

	function simple_search() {
		$final_conditions = array();
		$conditions = array();
		$or_conditions = array();
		$films  = array();
		$search_fields = array('Film.polish_title','Film.original_title',
		'Film.description');

		if($this->request->is('get')) {
			$value = $this->params["url"]["value"];
			$searches = explode(" ",$value);

			foreach ($searches as $s) {
				for($i=0;$i<count($search_fields);$i++){
					if($search_fields[$i] !="") {
						array_push($conditions,array("$search_fields[$i] LIKE "=>"%$s%"));
					}
				}
				array_push($or_conditions,array('OR'=>$conditions));
				$conditions = array();
			}
			$final_conditions = array('OR'=>$or_conditions);//array('contain' => array('FilmsPerson')),

			$films = $this->Film->find('all',
			array(
		'limit'=>10,
		'conditions'=>$final_conditions,'fields'=>array('Film.*')));
		}
		$this->set('films',$films);
	}

	public function advanced_search() {
		$data = array();
		$ex = '';
		$join[1] = array(
		'table' => 'Films_People',
		'alias' => 'fp',
		'type' => 'INNER',
		'conditions' => array(
		'fp.film_id = Film.id'
		)
		);
		$join[2] = array(
		'table' => 'People',
		'alias' => 'Person',
		'type' => 'INNER',
		'conditions' => array(
		'Person.id = fp.person_id'
		)
		);
		$join[3] =   array(
		'table' => 'Films_Genres',
		'alias' => 'FilmsGenre',
		'type' => 'INNER',
		'conditions' => array(
		'FilmsGenre.film_id = Film.id'
		)
		);
		$join[4] =  array(
		'table' => 'Genres',
		'alias' => 'Genre',
		'type' => 'INNER',
		'conditions' => array(
		'Genre.id = FilmsGenre.genre_id'
		));

		if ($this->request->is('post')) {
				$ex = 'brak wyników';
			    $this->Film->set($this->data);
			    $this->Genre->set($this->data);
			    $this->Person->set($this->data);
			if($this->Film->validates() && $this->Genre->validates() && $this->Person->validates()){
				$gatunek = $this->data['Genre']['name'];
				$tytul = $this->data['Film']['polish_title'];
				$rezyser = $this->data['Person']['name'];
				$rok = $this->data['Film']['production_year'];
				$jointables = array();
				$or_conditions = "";
				if(!empty($tytul)) {
					$or_conditions = "Film.original_title LIKE '%$tytul%' OR Film.polish_title LIKE '%$tytul%'";
				}
				if(!empty($gatunek)) {
					$conditions = "Genre.name LIKE '%$gatunek%'";
					if(!empty($or_conditions)){
						$or_conditions=$or_conditions.' AND '.$conditions;
					}else {
						$or_conditions = $conditions;
					}
					$jointables = array($join[3], $join[4]);
				}
				if(!empty($rezyser)) {
					$conditions = "Person.name LIKE '%$rezyser%' OR Person.surname LIKE '%$rezyser%' ";
					if(!empty($or_conditions)){
						$or_conditions=$or_conditions.' AND '.$conditions;
					}else {
						$or_conditions = $conditions;
					}
					if(!empty($gatunek)) {
						$jointables = array($join[1], $join[2], $join[3], $join[4]);
					}else {
						$jointables = array($join[1], $join[2]);
					}
				}
				if(!empty($rok)){
					$conditions = "Film.production_year = $rok";
					if(!empty($or_conditions)){
						$or_conditions=$or_conditions.' AND '.$conditions;
					}else {
						$or_conditions = $conditions;
					}
				}
				$final_conditions = $or_conditions;
				if(!empty($final_conditions)){	
					$data = $this->Film->find('all',
					array('joins' => $jointables,
					'limit'=>20,
					'conditions'=>$final_conditions,'fields'=>array('DISTINCT Film.*')));
				}
			}
			$this->set('ex',$ex);
			$this->set('films',$data);
		}
	}
	


}

?>