<?php

require_once 'Modele/Modele.php';

class Billet extends Modele {

  // Renvoie la liste des billets du blog
  public function getBillets() {
    $sql = 'select id as id, date_billet as date,'
    . ' titre_billet as titre, contenu_billet as contenu from t_billet'
    . ' order by id desc';
    $billets = $this->executerRequete($sql);
    return $billets;
  }

  // Renvoie les informations sur un billet
  public function getBillet($idBillet) {
    $sql = 'select id as id, date_billet as date,'
    . ' titre_billet as titre, contenu_billet as contenu from t_billet'
    . ' order by id desc';
    $billet = $this->executerRequete($sql, array($idBillet));
    if ($billet->rowCount() == 1)
      return $billet->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
}