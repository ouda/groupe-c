<?php
include('../model/produit.php');
$produit=new Produit();
$produit->setDescription("reda");
$produit->setPrix(15);
echo $produit->getDescription();
echo $produit->getPrix();

//include('/view/html/produit.php');
?>