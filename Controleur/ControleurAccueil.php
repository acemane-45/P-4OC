<?php

require_once 'Modele/Modele.php';
require_once 'Modele/Chapitre.php';
require_once 'Modele/Admin.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

    private $oneChapitre;

    public function __construct() {
       $this->chapitre = new chapitre(); // Bonne conscruct de base 
    }

    // Affiche la page d'accueil 
    public function accueil() {
       $chapitre = $this->chapitre->getChapitre();
       $vue = new Vue("Accueil");
       $vue->generer(array('chapitre' => $chapitre));

    }



    // Affiche la page Contact
    public function  Contact() {
        $vue = new Vue("Contact");
        $vue->generer(array());
    }

    
}
