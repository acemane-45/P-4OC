<?php

require_once 'Modele/Modele.php';



class admin extends Modele {
  // Ajoute un billet dans la base  
  public function ajouterChapitre($TitreChap,$ContenuChap) {
    $sql = 'insert into t_billet(date_billet,titre_billet,contenu_billet)' // enlever ID
        . ' values(?, ?, ?)';
    $date = date("Y-m-d H:i:s");    // récupére la date courante 
    $this->executerRequete($sql, array($date,$TitreChap,$ContenuChap));
}

public function AfficherCommentaireSignaler() {
  // Afficher les commentaires signaler 
  // Selectionne tout les flag_com au dessus de 0 depuis la table T_comentaire
   $sql = ' SELECT *    FROM t_commentaire WHERE flag_com>0    ';    
  $CommentaireSignaler = $this->executerRequete($sql);
  // Transformation pdo statement en array
  return $CommentaireSignaler->fetchAll();  // Retourne un tableau   
}

public function AfficherCommentaireNonSignaler() {
  //Selectionne tout les flag_com = a 0 depuis la table T_comentaire
  $sql = ' SELECT *    FROM t_commentaire WHERE flag_com=0    ';    
  $CommentaireNonSignaler = $this->executerRequete($sql);
  // Transformation pdo statement en array
  return $CommentaireNonSignaler->fetchAll();  // Retourne un tableau   

}

  // Modification d'un chapitre dans la base 
public function ModifierChapitreBase($id_Chap) {
    $sql = '  UPDATE t_billet
     SET titre_billet = "'.$_POST['ModifTitreChap'].'"      ,
         contenu_billet = "'.$_POST['ModifContenuChap'].'"   
         WHERE id=?  ' ; 
    $this->executerRequete($sql, array($id_Chap));
}


 // Suppression d'un billet dans la base  
public function  SupprimerChapitreBase($id_SuprChap) { 
    // Supprime la ligne du billet selon id 
    $sql = '  DELETE FROM t-billet WHERE id=? ' ;     
    $this->executerRequete($sql, array($id_SuprChap));
}
// Supprimer un commentaires en méme temps qu'un billet  Selon ID de la table t_commentaire 
public function SupprimerCommentaireDeChap($comchap_idsupr) {
  $sql = '  DELETE FROM  t-commentaire     WHERE id_billet=?  ' ;  
   $this->executerRequete($sql, array($comchap_idsupr));
}



// Supprimer un commentaires ADMIN
public function SupprimerCommentaireReq($id_comsupr) {
     $sql = '  DELETE FROM  t-commentaire      WHERE id=?  ' ;  
      $this->executerRequete($sql, array($id_comsupr));
}



} // Fin de class admin 
