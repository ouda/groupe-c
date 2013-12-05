<?php
include('../Lib/db.php');
include('../Modele/commande.php');
$commande = new Commande();
$items = $commande->listeCommandes();
include('../Vue/html/commande.php');
?>