<?php $this->titre = "Zone Admin"; ?>

<nav id="navAdmin">
              <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a>
              <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a>
              <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a>
              <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a>
              <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   
      </nav>



<h2> Vous pouvez modifier votre chapitre </h2>  
<hr>
<div id="ZoneAjouterChap">
        <form method="post" action="index.php?action=XXX">
            <!-- Modifier le titre du chapitre -->  
                <input type="text" name="ModifTitreChap" id="ModifTitre" value=" <?=$chapitre['titre'] ?>   "  /> 

            <!--Contenu de modification --> 
                <textarea name="ModifContenuChap" id="mytextarea" rows="10" cols="50">
                <?= $chapitre['contenu'] ?>
                </textarea>   
            
            
                <input type="hidden" name="idChap" id="ModifTitre" value=" <?=$chapitre['id'] ?>   "  /> 
            
            
                <input type="submit" value="Modifier le chapitre" class="bouton_modifier" />
    </form>

</div>

 


