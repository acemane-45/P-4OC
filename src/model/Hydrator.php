<?php

namespace App\src\model;

class Hydrator
{
    //Hydrate

    public function hydrate(array $donnees) {
        // On fait une boucle avec le tableau de données
        foreach ($donnees as $key => $value) {
            // On récupère le nom des setters correspondants
            // il suffit de mettre la 1ere lettre de key en Maj et de le préfixer par set
            $method = 'set'.ucfirst($key);

            // On vérifie que le setter correspondant existe
            if (method_exists($this, $method)) {
                // S'il existe, on l'appelle
                $this->$method($value);
            }
        }
    }
}