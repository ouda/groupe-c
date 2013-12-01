<?php
/*
require_once('./lib/db.php');
class accueil{
	
	private $db;
	
	public function __construct(){
		$this->db = new db();
	}
	
	public function Authentification($login,$motdepasse)
	{
	     
		$sql = "SELECT * FROM authentification where login='$login'";
		$this->db->executeUpdate($sql);
		
	}
	
		
}*/



include('lib/db.php');
class authentification{
	
	private $db;
	
	public function __construct(){
		$this->db = new db();
	}
	
	public function authentification($login,$motdepasse)
	{
		$sql = 'insert into authentification values("'.$login.'","'.$motdepasse.'")';
		$this->db->executeQuery($sql);
	}
	
	
	
}