<?php

require_once 'Modele/Modele.php';



class chapitre extends Modele {

  // Renvoie la liste des billets du blog
  // Utiliser SubSTR()
  public function getChapitre() {
  $sql = 'select id as id, date_billet as date,'
  . ' titre_billet as titre, contenu_billet as contenu  from t_billet'
  . ' order by id  desc'; // Si on retire le desk on change l'ordre  // by ID desc  
    $chapitre = $this->executerRequete($sql);
    return $chapitre;
  }

  // Renvoie les informations sur un billet
  public function getOneChapitre($idoneChapitre) {
      $sql = 'select id as id, date_billet as date,'
      . ' titre_billet as titre, contenu_billet as contenu  from t_billet'
      . ' where id=?   ';


    $oneChapitre = $this->executerRequete($sql, array($idoneChapitre));
    if ($oneChapitre->rowCount() == 1)
      return $oneChapitre->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun Chapitre ne correspond à l'identifiant '$idoneChapitre'");
    }
      

}  // Fin de classe chapitre 