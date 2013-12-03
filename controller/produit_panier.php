<?php
include('../lib/db.php');
include('../model/produit_panier.php');
$produit=new Produit_Panier();
$items=$produit->listeProduit();
echo $items->getId();
include('../view/html/produit_panier.php');
?>