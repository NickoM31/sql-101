<?php  
class Armoire {
	private $db;

	public function __construct(){
		ORM::configure('mysql:host=localhost;dbname=mon_armoire;charset=utf8');
		ORM::configure('username', 'root');
		ORM::configure('password', 'root');
		$this->db = ORM::for_table('mes_chaussettes');

	}
	public function getInstance(){
		return $this->db;
	}

	public static function all($limit=Null,$offset=Null){
		$a = new self();
		return $a->getInstance()
		->limit($limit)
		->offset($offset)
		->find_many();
		
	}
	public static function get($id){
		$a = new self();
		return $a->getInstance()->find_one($id);
		
	}
}




