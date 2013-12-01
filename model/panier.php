<?php
include('lib/db.php');
class Panier {
	private  $id;
	private  $date_creation;
	private  $prix_total;
	private $db;
  // Constructeur de la classe Panier
	public function __construct(){
		$this->db = new db();
	}
    /**
	**  id
	**/
	public function getId() {
	   
	   return $this->id;
    }

    public function setId($idpanier){
 
       return $this->id=$idpanier; 
    }
    /**
	**  date Creation
	**/
	public function getDate_creation(){
 
       return $this->date_creation;
    }

    public function setDate_creation($datecreation){
 
       return $this->date_creation=$datecreation;  
    }
    /**
	**  prix total
	**/
	public function getPrix_total(){
       
       return $this->prix_total;
    }

    public function setPrix_total($prix_total){
       
       return $this->prix_total=$prix_total;  
    }
	/**
	** fonction toString()
	**/
	public function __toString(){
	return $id;
	}

    }
?>