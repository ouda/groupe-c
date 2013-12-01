<?php
include('../model/categorie.php');
class Produit
{
	private $id;
	private $libelle;
	private $description;
	private $prix;
	private $couleur;
	private $quantite;
	private $categorie;
	private $db;
	
	//Constructeur par défaut de la classe Produit
	public function __construct(){
		$this->db = new db();
	}
	/**
	**	id
	**/
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id=$id;
	}
	/**
	**	libelle
	**/
	public function getLibelle(){
		return $this->libelle;
	}
	public function setLibelle($libelle){
		 $this->libelle=$libelle;
	}
	/**
	**	description
	**/
	public function getDescription(){
		return $this->description;
	}
	public function setDescription($description){
		 $this->description=$description;
	}
	/**
	**	prix
	**/
	public function getPrix(){
		return $this->prix;
	}
	public function setPrix($prix){
		 $this->prix=$prix;
	}
	/**
	**	couleur
	**/
	public function getCouleur(){
		return $this->couleur;
	}
	public function setCouleur($couleur){
		 $this->couleur=$couleur;
	}
	/**
	**	quantite
	**/
	public function getQuantite(){
		return $this->quantite;
	}
	public function setQuantite($quantite){
		 $this->quantite=$quantite;
	}
	/**
	** fonction toString()
	**/
	public function __toString(){
	return $id;
	}	
	public function listeProduit()
	{
		$query = 'select * from produit';
		$res = mysql_query($query);
        $items = array();
        while ($ligne = mysql_fetch_assoc($res)) {
            $item = new Produit();
            $item->id = $ligne['idProduit'];
            $item->libelle = $ligne['libelleProduit'];
            $item->description = $ligne['description'];
            $item->prix = $ligne['prix'];
            $items[] = $item;
        }
	return $items;
	}
		
}