<?php

// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getBillets() {
    $bdd = getBdd();
  $billets = $bdd->query('select id as id, date_billet as date,'
    . ' titre_billet as titre, contenu_billet as contenu from t_billet'
    . ' order by id desc');
  return $billets;
}
// Effectue la connexion à la BDD (evite de dupliquer le code , lors d'ajout de fonction)
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=blog-p4;charset=utf8', 
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//les éventuelles erreurs sont signalées sous la forme d'exceptions
    return $bdd;
  }