<?php

require_once 'Modele/Modele.php';

class Commentaire extends Modele {

  // Renvoie la liste des commentaires associés à un billet
  public function getCommentaires($idBillet) {
    $sql = 'select id as id, date_com as date,'
    . ' auteur_com as auteur, contenu_com as contenu, flag_com as flag from t_commentaire'
    . ' where id_billet=?';
    $commentaires = $this->executerRequete($sql, array($idBillet));
    return $commentaires;

  }
}