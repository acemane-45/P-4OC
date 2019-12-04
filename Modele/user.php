<?php
require_once 'Framework/Modele.php';
/**
 * Modélise un utilisateur du blog
 */
class Utilisateur extends Modele 
{
	private $_login;
	 
	 /**
     * Vérifie qu'un utilisateur existe dans la BD
     * 
     * @param string $login Le login
     * @return renvoie le contenu de la requete
     */
	public function getUserPassword($login){
		$sql = "select t_mdp from user where t_login=?";
		$resultatRequete = $this->executerRequete($sql, array($login));
		$contenuRequete = $resultatRequete->fetch();
		return $contenuRequete;
    }
	
	public function setLogin($login){
		$this->_login = $login;
	}
	
	public function getLogin(){
		return $_login;		
	}
	
    /**
     * Renvoie un utilisateur existant dans la BD
     * 
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return mixed L'utilisateur
     * @throws Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function getUtilisateur($login, $mdp)
    {
        $sql = "select id as idUtilisateur, t_login as login, t_mdp as mdp 
            from user where t_login=? and t_mdp=?";
        $utilisateur = $this->executerRequete($sql, array($login, $mdp));
        if ($utilisateur->rowCount() == 1)
            return $utilisateur->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun utilisateur ne correspond aux identifiants fournis");
    }
}