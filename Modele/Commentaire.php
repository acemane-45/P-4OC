<?php

require_once 'Modele/Modele.php';

class commentaire extends Modele {

// Renvoie la liste des commentaires associés à un chapitre
    public function getCommentaires($idoneChapitre) {
        $sql = 'select id as id, date_com as date,'
                . ' auteur_com as auteur, contenu_com as contenu from t_commentaire'
                . ' where id_billet=?';
        $commentaires = $this->executerRequete($sql, array( $idoneChapitre));
        return $commentaires;
    }


    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $contenu,  $idoneChapitre  ) {
        $sql = 'insert into t_commentaire(date_com, auteur_com, contenu_com,id_billet)'
            . ' values(?, ?, ?, ?)';
        $date = date("Y-m-d H:i:s");    // récupére la date courante 
        
        $this->executerRequete($sql, array($date, $auteur, $contenu,  $idoneChapitre ));
    }


    // Signaler un commentaires   // met un commentaire a 1 
    public function SignalerCommentaire($id_com) {
    $sql = '  UPDATE t_commentaire  SET flag_com = 1      WHERE id=?  ' ;  
    $this->executerRequete($sql, array($id_com));
    }
}