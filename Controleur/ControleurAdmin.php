<?php

require_once 'Modele/Modele.php';
require_once 'Modele/Chapitre.php';
require_once 'Modele/Admin.php';
require_once 'Vue/Vue.php';



class ControleurAdmin { 
    private $oneChapitre;
    private $commentaire;
    private $admin;
    private $CommentaireSignaler ; 
    private $CommentaireNonSignaler ; 


    public function __construct() {
        $this->chapitre = new chapitre();
        $this->commentaire = new commentaire();
        $this->admin = new admin();
    }

    // Fonction Pour generer la vue Acces 
    public function AccesAdmin (){
        $vue = new Vue("acces");    // Generation de la vue Acces 
        $vue->generer(array());
    }


    // Function de connexion Admin   
public function ConnexionAdmin() {   
     if  (   
             ( isset($_POST["login"]) && ($_POST["login"] == "jean")  &&
              isset($_POST["password"]) && ($_POST["password"] == "forteroche")  )
              ||
             ( isset($_SESSION["login"]) && ($_SESSION["login"] == "jean")  &&
               isset($_SESSION["password"]) && ($_SESSION["password"] == "forteroche")  )
     )

    { 
        $chapitre = $this->chapitre->getChapitre(); // On ajoute les info du chapitre pour la vue admin 
        $vue = new Vue("Admin");    // Generation de la vue Admin 
        $vue->generer(array('chapitre' => $chapitre, ));
    //    $vue->generer(array());

        
        $_SESSION['login'] = 'jean';  // On stock dans la session 
        $_SESSION['password'] = 'forteroche'; 
    }
    else {  // si mauvais mots de passe 
        $vue = new Vue("Acces");    // Generation de la vue ACCES
        $vue->generer(array());
    }  
}  // Fin ConnexionAdmin 

public function DeconnexionAdmin()  {
    session_destroy() ;         // On détruit la session et on revien a la vue acces 
    $vue = new Vue("Acces");    // Generation de la vue ACCES
    $vue->generer(array());
}

// Ajoute un chapitre a la base 
public function AdChapitre() {
    // recuperation du formulaire mis dans les variables 
      $TitreChap =  $_POST['TitreChap'];   
      $ContenuChap =  $_POST['ContenuChap'];
      $this->admin->ajouterChapitre($TitreChap, $ContenuChap); 
      // Ajout des info des chapitre pour les avoir la liste acceuil 
      $chapitre = $this->chapitre->getChapitre();
      // rediriger vers la vueAcceuil 
      $vue = new Vue("Accueil");
      $vue->generer(array('chapitre' => $chapitre));
}

/* ********************** Modification Chapitre   *************** */ 

// Function generation de vue admin ModifChapitre
public function ModificationChapitre()  {   
    $chapitre = $this->chapitre->getChapitre(); // On ajoute les info du chapitre  
    $vue = new Vue("ModifChapitre");    // Generation de la vue ModifChapitre
    $vue->generer(array('chapitre' => $chapitre));
} 

// Affiche le choix du chapitre 
public function ModifierChapitre($idoneChapitre)  { 
    $chapitre = $this->chapitre->getChapitre(); // On ajoute les info du chapitre 
    $oneChapitre  = $this->chapitre->getOneChapitre($idoneChapitre);
    $vue = new Vue("SelectChap");    // Generation de la vue ModifChapitre
    $vue->generer(array('chapitre'=>$oneChapitre )); 
}

// Modification du chapitre dans la base  
public function ModifierChapitre3()  {          
    $id_Chap =  $_POST['idChap'];  // Recupére l'id du chapitre sur le bouton modifier le chapitre définitif 
    $oneChapitre  = $this->chapitre->getOneChapitre($id_Chap);
    $this->admin->ModifierChapitreBase($id_Chap); 
    $chapitre = $this->chapitre->getChapitre(); // On ajoute les info du chapitre    
    // On redirige vers l'acceuil 
    $vue = new Vue("Accueil");  
    $vue->generer(array('chapitre' => $chapitre));
}

/* ********************** Suppression Chapitre   *************** */ 
// Generation de la vue SuprChapitre ADMIN 
public function SuprChapitre() {
    $chapitre = $this->chapitre->getChapitre(); // On ajoute les info du chapitre 
    // Generation de la vue 
    $vue = new Vue("SuprChapitre");  
    $vue->generer(array(
        'chapitre' => $chapitre,                
    ));
}

// Selection formulaire et envoie a la base  
public function SuppressionChapitre()  {  
    // Supprime les commentaires du chapitre avant */ 
    $comchap_idsupr =  $_POST['SelectSuprChap'];   
    $this->admin->SupprimerCommentaireDeChap($comchap_idsupr); 
    // Supprime le chapitre de la base 
    $id_SuprChap = $_POST['SelectSuprChap'];
    $oneChapitre  = $this->chapitre->getOneChapitre($id_SuprChap);
    $this->admin->SupprimerChapitreBase($id_SuprChap);  
    
    $chapitre = $this->chapitre->getChapitre(); // On ajoute les info du chapitre     
      // On redirige vers l'acceuil 
      $vue = new Vue("Accueil");  
      $vue->generer(array('chapitre' => $chapitre));
}


public function VoirCommentaire()  {   
    $CommentaireSignaler  = $this->admin->AfficherCommentaireSignaler();
    $CommentaireNonSignaler  = $this->admin->AfficherCommentaireNonSignaler();
    
    // Essai d'avoir le titre du chapitre --------------------------------------
    
    
    $chapitre = $this->chapitre->getChapitre(); 
    
  //   $ChapitreID =  $CommentaireSignaler['CHA_ID'] ; 
  //   $oneChapitre  = $this->chapitre->getOneChapitre($ChapitreID);
    // $oneChapitre  = $this->chapitre->getOneChapitre($idoneChapitre);
    
    
    // ------------------------------------------------------------------------
    // Afficher la vue 
    $vue = new Vue("VoirCom");    // Generation de la vue VoirCom
    $vue->generer(array( 
    'ListeCommentaires' => $CommentaireSignaler,
  //  'chapitre' => $chapitre,
  //  'chapitre'=> $oneChapitre,
    'ListeCommentairesNonSignaler' => $CommentaireNonSignaler 
    ));  
} 

public function SupprimerCommentaire() { 
    $com_idsupr =  $_POST['com_id']; // recupérer l'id du commentaire dans le formulaire du bouton supprimer
     $this->admin->SupprimerCommentaireReq($com_idsupr); // Requete selon com_idsupr 
    $commentaires = $this->commentaire->getCommentaires($com_idsupr);

    // Gerer aussi l'id du chapitre 
    $id_chapsupr =  $_POST['idchapsupr'];  // Recupére l'id du billet sur le bouton signaler 
    $oneChapitre  = $this->chapitre->getOneChapitre($id_chapsupr);
    $commentaires = $this->commentaire->getCommentaires($id_chapsupr);     
          
    // On actualise  
    $CommentaireSignaler  = $this->admin->AfficherCommentaireSignaler();
    $CommentaireNonSignaler  = $this->admin->AfficherCommentaireNonSignaler();

    // Afficher la vue 
    $vue = new Vue("VoirCom");    // Generation de la vue VoirCom
    // Avec les parametres suivant pour la vue : 
       $vue->generer(array( 
       'ListeCommentaires'=> $CommentaireSignaler ,
       'commentaires'=> $commentaires,
       'ListeCommentairesNonSignaler'=> $CommentaireNonSignaler ));  

}


}  // fin de class controleur admin 





