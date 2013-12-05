<?php
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
		 $this->id=$id;
	}
	/**
	**	Produit
	**/
	public function getProduit(){
		return $this->produit;
	}
	public function setProduit($produit){
		 $this->produit=$produit;
	}
	/**
	**	Statut
	**/
	public function getStatut(){
		 return $this->statut;
	}
	public function setStatut($statut){
		 $this->statut=$statut;
	}
	/**
	**	Date Commande
	**/
	public function getDateCommande(){
		return $this->dateCommande;
	}
	public function setDateCommande($dateCommande){
		 $this->dateCommande=$dateCommande;
	}	
	
	public function listeCommandes()
	{
		$query = 'select * from commande';
		$res = mysql_query($query);
        $items = array();
        while ($ligne = mysql_fetch_assoc($res)) {
            $cmd = new Commande();
           // $cmd->setClient($ligne['client']);
           // $cmd->setProduit($ligne['produit']);
		   
            $cmd->setStatut($ligne['Statut']);
            $cmd->setDateCommande($ligne['dateCommande']);
            $items=array('statut'=> $cmd->getStatut(),'dateCommande'=> $cmd->getDateCommande());
        }
	return $items;
	}
	
}