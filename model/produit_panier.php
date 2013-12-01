<?php
include('lib/db.php');
class Produit_Panier
{
	private Produit $produit;
	private Panier $panier;
	private $db;
	//Constructeur par défaut de la classe Produit_Panier
	public function __construct(){
		$this->db = new db();
	}
	/**
	**	Produit
	**/
	public function getProduit(){
		return $this->produit;
	}
	public function setProduit(Produit $produit){
		return $this->produit=$produit;
	}
	/**
	**	Panier
	**/
	public function getPanier(){
		return $this->panier;
	}
	public function setPanier(Panier $Panier){
		return $this->panier=$panier;
	}
}