<?php
include('../lib/db.php');
include('../model/produit.php');
$produit=new Produit();
$items=$produit->listeProduit();
include('../view/html/produit.php');
?>