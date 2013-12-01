<?php
include('../model/panier.php');
include('../model/produit.php');
class Produit_Panier
{
	private $produit;
	private $panier;
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
		 $this->produit=$produit;
	}
	/**
	**	Panier
	**/
	public function getPanier(){
		return $this->panier;
	}
	public function setPanier(Panier $Panier){
		 $this->panier=$panier;
	}
	public function listeProduit()
	{
		$query = 'select * from produit';
		$res = mysql_query($query);
        $items = array();
        while ($ligne = mysql_fetch_assoc($res)) {
            $item = new Produit();
            $item->setId($ligne['idProduit']);
            $item->setLibelle($ligne['libelleProduit']);
            $item->setDescription($ligne['description']);
            $item->setPrix($ligne['prix']);
            $items[] = $item;
        }
	return $items;
	}
}