<?php

require_once 'Modele/Modele.php';
require_once 'Modele/Chapitre.php';
require_once 'Vue/Vue.php';
require_once 'Modele/Commentaire.php';

class ControleurChapitre {
    private $oneChapitre;
    private $commentaire;

    public function __construct() {
        $this->chapitre = new chapitre();
        $this->commentaire = new commentaire();
    }

    // Affiche les détails sur un chapitre
    public function chapitre($idoneChapitre) {
        $oneChapitre  = $this->chapitre->getOneChapitre($idoneChapitre);
        $commentaires = $this->commentaire->getCommentaires($idoneChapitre);

       $vue = new Vue("Chapitre");
       $vue->generer(array('chapitre' => $oneChapitre, 'commentaires' => $commentaires));
    }

    // Ajoute un commentaire à un billet
    public function commenter($auteur, $contenu, $idoneChapitre) {
        // Sauvegarde du commentaire
        $this->commentaire->ajouterCommentaire($auteur, $contenu,$idoneChapitre);
        // Actualisation de l'affichage du billet
        $this->chapitre($idoneChapitre);
    }

    // Signaler un commentaire sur un billet
    public function Signaler() {
        // Signalement du commentaire 
        $com_id =  $_POST['id']; // recupérer l'id du commentaire dans le formulaire du bouton signaler 
        $this->commentaire->SignalerCommentaire($com_id);
   
        $id_chap =  $_POST['idchap'];  // Recupére l'id du billet sur le bouton signaler 
        $oneChapitre  = $this->chapitre->getOneChapitre($id_chap);
        $commentaires = $this->commentaire->getCommentaires($id_chap);
        
         $vue = new Vue("Chapitre");
        $vue->generer(array('chapitre' => $oneChapitre, 'commentaires' => $commentaires));
    }

}