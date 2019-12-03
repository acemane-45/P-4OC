<?php
// Accès aux données
require 'Modele.php';//la fonction require  inclut et execute le fichier 

// Fonction pour les billet
try{
$billets = getBillets();// Renvoie la liste de tous les billets, triés par identifiant décroissant


// Affichage
require 'vueAccueil.php';//la fonction require  inclut et execute le fichier 
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';

}
?>