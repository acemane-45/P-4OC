<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurChapitre.php';
require_once 'Controleur/ControleurAdmin.php';

require_once 'Vue/Vue.php';
class Routeur {

    private $ctrlAccueil;
    private $ctrlChapitre;
    private $ctrlAdmin;

    public function __construct() {
        $this->ctrlAccueil  = new ControleurAccueil();
        $this->ctrlChapitre = new ControleurChapitre();
        $this->ctrlAdmin =    new ControleurAdmin();


    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                // Si l'action chapitre est effectuer 
                if ($_GET['action'] == 'chapitre') {
                    $idoneChapitre = intval($this->getParametre($_GET, 'id'));
                    if ($idoneChapitre != 0) {
                        $this->ctrlChapitre->chapitre($idoneChapitre);
                    }
                    else {
                         throw new Exception("Identifiant de chapitre non valide"); 
                    }
                }
                // Si l'action commenter est effectuer 
                 if  ($_GET['action'] == 'commenter') {
                     $auteur = $this->getParametre($_POST, 'auteur'); // variable auteur = $_post du name auteur 
                     $contenu = $this->getParametre($_POST, 'contenu');
                     $idoneChapitre = $this->getParametre($_POST, 'id');
                     
                     $this->ctrlChapitre->commenter($auteur, $contenu,  $idoneChapitre);
                }
                //Si l'action signaler est effectuer 
                if  ($_GET['action'] == 'signaler') {
                    $this->ctrlChapitre->signaler();
               }
                 
                // Si l'action admin est effectuer 
                if ($_GET['action'] == 'admin') {  // Si l'action Admin est effectuer alors :
                      $this->ctrlAdmin->ConnexionAdmin();  // Connexion Admin + Session 
                }    
                // On se deconecte avec l'action Deconnexion 
                if ($_GET['action'] == 'Deconnexion') {  
                    $this->ctrlAdmin->DeconnexionAdmin(); 
                }
                // Ajouter un chapitre a la base 
                if ($_GET['action'] == 'AjouterChapitre') {  
                $this->ctrlAdmin->AdChapitre(); 
                }

                if ($_GET['action'] == 'ModifChapitre') {  // Affiche la vue admin 
                    $this->ctrlAdmin->ModificationChapitre(); 
                }
               // Gére la selection du chapitre selon l'id
                if ($_GET['action'] == 'chapitremodif') {   
                    $idoneChapitre = intval($this->getParametre($_GET, 'id'));
                    if ($idoneChapitre != 0) {
                        $this->ctrlAdmin->ModifierChapitre($idoneChapitre);
                    }
                    else {
                         throw new Exception("Identifiant de chapitre non valide"); 
                    }
                }

                // Envoie du billet a la base   Modifier nom 
                if ($_GET['action'] == 'XXX') {  
                    $this->ctrlAdmin->ModifierChapitre3();        
                }


                // Affiche la selection de billet 
                if ($_GET['action'] == 'SuprChapitre') {  
                    $this->ctrlAdmin->SuprChapitre();        
                }

                // Suppression du billet a la base   // Suppr aussi les commentaires au clic 
                if ($_GET['action'] == 'chapitresupr') {     
                    $this->ctrlAdmin->SuppressionChapitre(); // Suprimme le chapitre avec les commentaires avant 
                          
                }

 
 

                if ($_GET['action'] == 'SupprimerCommentaire') {  // Si l'action SupprimerCommentaire est effectuer alors :  
                    $this->ctrlAdmin->SupprimerCommentaire()  ;        
                }  

                
               
                if ($_GET['action'] == 'VoirCom') {  // Si l'action VoirCom est effectuer alors :  Zone admin
                    $this->ctrlAdmin->VoirCommentaire();        
                }
            


                     
                if ($_GET['action'] == 'Contact') {  // Affiche la vue Synopsis 
                    $this->ctrlAccueil->Contact();        
                }     



            } // Fin du grand grand if 
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }

        }
        catch (Exception $e) { // Sinon on affiche l'erreur 
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) { // pour afficher la vueErreur 
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}

  