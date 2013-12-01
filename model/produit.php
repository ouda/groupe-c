<?php

include('../lib/db.php');
include('../model/categorie.php');
class Produit
{
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
	/**
	**	libelle
	**/
	public function getLibelle(){
		return $this->libelle;
	}
	public function setId($libelle){
		return $this->libelle=$libelle;
	}
	/**
	**	description
	**/
	public function getDescription(){
		return $this->description;
	}
	public function setDescription($description){
		return $this->description=$description;
	}
	/**
	**	prix
	**/
	public function getPrix(){
		return $this->prix;
	}
	public function setPrix($prix){
		return $this->prix=$prix;
	}
	/**
	**	couleur
	**/
	public function getCouleur(){
		return $this->couleur;
	}
	public function setCouleur($couleur){
		return $this->couleur=$couleur;
	}
	/**
	**	quantite
	**/
	public function getQuantite(){
		return $this->quantite;
	}
	public function setQuantite($quantite){
		return $this->quantite=$quantite;
	}
	/**
	** fonction toString()
	**/
	public function __toString(){
	return $id;
	}	
	/*public function listeProduit()
	{
		$sql = 'select * from produit';
		$this->db->executeQuery($sql);
		$res = mysql_query($query);
        $items = array();
        while ($ligne = mysql_fetch_assoc($res)) {
            $item = new item();
            $item->id = $ligne['idItem'];
            $item->nom = $ligne['nom'];
            $item->description = $ligne['description'];
            $item->prix = $ligne['prix'];
            $items[] = $item;
        }
	return $items;
	}*/
		
}