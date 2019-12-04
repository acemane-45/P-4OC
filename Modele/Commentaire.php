<?php

require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accÃ¨s aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Commentaire extends Modele {

// Renvoie la liste des commentaires associÃ©s Ã  un billet
    public function getCommentaires($idBillet) {
        $sql = 'select id as id, date_com as date,'
                . ' auteur_com as auteur, contenu_com as contenu, flag_com as flag from t_commentaire'
                . ' where id_billet=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }

  /** 
	 * Renvoie la liste des commentaires du blog
     * 
     * @return PDOStatement La liste des commentaires
     */
	public function getListCommentaires(){
		$sql = 'select id as id, date_com as date,'
                . ' auteur_com as auteur, contenu_com as contenu , flag_com as flag from t_commentaire'
                . ' where flag_com = 0 order by id desc';
		$commentairesNoFlag = $this->executerRequete($sql);
		
		$sql = 'select id as id, date_com as date,'
                . ' auteur_com as auteur, contenu_com as contenu , flag_com as flag from t_commentaire'
                . ' where flag_com = 1 order by id desc';
				
		$commentairesFlag = $this->executerRequete($sql);
		
		$commentaires = array ($commentairesNoFlag, $commentairesFlag);
		
        return $commentaires;
		
	}
        /*Ajoute un commentaire */
    public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into t_commentaire(date_com, auteur_com, contenu_com, flag_com, id_billet)'
            . ' values(?, ?, ?, ?)';
        $date = date(DATE_W3C);
        $this->executerRequete($sql, array($date, $auteur, $contenu, $idBillet));
    }

/*Signale un commentaire*/
public function signalerCommentaire($idCommentaire){
    $sql = 'update t_commentaire set flag_com = 1 where id = ?';
    $this->executerRequete($sql, array($idCommentaire));
}

/*Sauvegarde un commentaire signalé */
public function saveCommentaire($id){
    $sql = 'update t_commentaire set flag_com = 0 where id = ?';
    $this->executerRequete($sql, array($id));
}

/*Supprimer un commentaire*/
public function supprimerCommentaire($idCommentaire){
    $sql = 'delete from t_commentaire where id= ?';
    $this->executerRequete($sql, array($idCommentaire));
}

/*Supprime les commentaires rattachés au billet supprimé*/
public function supprimerCommentairesBillet($idBillet){
    $sql = 'delete from t_commmentaire where id_billet=?';
    $this->executerRequete($sql, array($idBillet));
}

/**
 * Renvoie le nombre total de commentaires
 * 
 * @return int Le nombre de commentaires
 */
public function getNombreCommentaires()
{
    $sql = 'select count(*) as nbCommentaires from t_commentaire';
    $resultat = $this->executerRequete($sql);
    $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
    return $ligne['nbCommentaires'];
}

}