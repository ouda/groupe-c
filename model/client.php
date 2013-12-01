<?php
include('lib/db.php');
 class Client
{
	private  $id;
	private  $nom_client;
	private  $prenom_client;
	private  $sexe;
	private  $dateNaiss;
	private  $adresse;
	private  $email;
	private Espace $espace;
	private Panier $panier;
	private $db;
//Constructeur de la classe client
    public function __construct(){
		$this->db = new db();
	}

    /**
	**	id_client
	**/
	public function getId() {
       
       return $this->id;
    }
    public function setId($id) {
       
       return  $this->id =$id; 
    }
    /**
	**  nom_client
	**/
    public function getNom_client() {
       
       return $this->nom_client;
    
    }
    public function setNom_client($nomclient){
 
       return  $this->nom_client =$nomclient; 
    }
    /**
	**  prenom_client
	**/
    public function getPrenom_client() {  
       
       return $this->prenom_client;
    
    }
    public function setPrenom_client($prenomclient) {
 
       return  $this->prenom_client =$prenomclient; 
    }
	/**
	**  sexe
	**/
    public function getSexe() {
       
       return $this->sexe;
    
    }
    public function setSexe($sexe){
 
       return  $this->sexe =$sexe; 
    }
    /**
	** Date Naissance
	**/
    public function getDateNaiss() {  
       
       return $this->dateNaiss;
    
    }
    public function setDateNaiss($dateNaiss) {
 
       return  $this->dateNaiss =$dateNaiss; 
    }
	/**
	** Adresse
	**/
    public function getAdresse() {  
       
       return $this->adresse;
    
    }
    public function setAdresse($adresse) {
 
       return  $this->adresse =$adresse; 
    }
	/**
	** Email
	**/
    public function getEmail() {  
       
       return $this->email;
    
    }
    public function setEmail($email) {
 
       return  $this->email =$email; 
    }
	/**
	** Espace Personnel
	**/
    public function getEspace() {  
       
       return $this->espace;
    
    }
    public function setEspace(Espace $espace) {
 
       return  $this->espace =$espace; 
    }
	/**
	** Panier
	**/
    public function getPanier() {  
       
       return $this->panier;
    
    }
    public function setPanier(Panier $panier) {
 
       return  $this->panier =$panier; 
    }
	/**
	** fonction toString()
	**/
	public function __toString(){
	return $id;
	}
    }
?>