<?php

require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Billet extends Modele {

    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getBillets() {
        $sql = 'select id as id, date_billet as date,'
                . ' titre_billet as titre, contenu_billet as contenu from t_billet'
                . ' order by id desc';
        $billets = $this->executerRequete($sql);
        return $billets;
    }
    public function getThreeBillets() {
        $sql = 'select id as id, date_billet as date,'
                . ' titre_billet as titre, contenu_billet as contenu from t_billet'
                . ' order by id desc'
				. ' limit 3';
        $threeBillets = $this->executerRequete($sql);
        return $threeBillets;
    }

    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getBillet($idBillet) {
        $sql = 'select id as id, date_billet as date,'
                . ' titre_billet as titre, contenu_billet as contenu from t_billet'
                . ' where id=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
    /* Ajoute un billet dans la BD*/
	public function ajouterBillet($titre, $contenu) {
		$sql = 'insert into t_billet (date_billet, titre_billet, contenu_billet)'
			.'values(?, ?, ?)';
		$date = date('Y-m-d H:i:s');
		$this->executerRequete($sql, array($date, $titre, $contenu));
		
	}
	/*Supprime un billet dans la BD*/
	public function supprimerBillet($idBillet){
		$sql = 'delete from t_billet where id=?';
		$this->executerRequete($sql, array($idBillet));
	}
	
	/*Update un billet dans la BD*/
	public function updateBillet($titre, $contenu, $idBillet){
		$sql = ' update t_billet'
				.' set titre_billet=?, contenu_billet=?'
				.' where id=?';
		$this->executerRequete($sql, array($titre, $contenu, $idBillet));		
	}
	
    /**
     * Renvoie le nombre total de billets
     * 
     * @return int Le nombre de billets
     */
    public function getNombreBillets()
    {
        $sql = 'select count(*) as nbBillets from t_billet';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbBillets'];
    }

}