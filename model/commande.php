<?php
include('lib/db.php');
class Commande
{
	private Client $client;
	private Produit $produit;
	private $statut;
	private $dateCommande;
	private $db;
	//Constructeur par défaut de la classe Commande
	public function __construct(){
		$this->db = new db();
	}
	/**
	**	Client
	**/
	public function getClient(){
		return $this->client;
	}
	public function setClient(Client $client){
		return $this->id=$id;
	}
	/**
	**	Produit
	**/
	public function getProduit(){
		return $this->produit;
	}
	public function setProduit($produit){
		return $this->produit=$produit;
	}
	/**
	**	Statut
	**/
	public function getStatut(){
		return $this->statut;
	}
	public function setStatut($statut){
		return $this->statut=$statut;
	}
	/**
	**	Date Commande
	**/
	public function getDateCommande(){
		return $this->dateCommande;
	}
	public function setDateCommande($dateCommande){
		return $this->dateCommande=$dateCommande;
	}	
	
}