<?php $this->titre = "Zone Admin"; ?>
<nav id="navAdmin">
              <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a>
              <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a>
              <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a>
              <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a>
              <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   
      </nav>
    
<h2 class="TitrePage"> Supprimer un chapitre </h2> 
<hr>


<div id="ZoneAjouterChap"> 
    
    
    <form method="POST" action="index.php?action=chapitresupr" >
        
    <label for="pays"><h2> Veuillez selectionner un chapitre a SUPPRIMER </h2> </label><br />

    <select name="SelectSuprChap" id="selectionchapitre">

    <?php foreach ($chapitre as $oneChapitre): ?>
        <option value="   <?=$oneChapitre['id'] ?>   "     selected>     <?=  $oneChapitre['titre'] ?>  </option> 
    <?php endforeach; ?>
    
        <br/>
       <input type="submit" value="Supprimer le chapitre" Onsubmit="return attention();"  id="bouton_supprimer"     />
        
        
   </select>
     </form>

     <hr>
     <h2> Pour supprimer un chapitre veuillez selectionner le chapitre dans la liste deroulante <br/>
     puis cliquer sur "Supprimer le chapitre" <br/>
     Ensuite un message d'alerte va s'afficher, si vous voulez continuer <br/>
     Selectionner : "OK" <br/>
     Sinon Selectionner : "Annuler" <br/> 
    </h2>

 </div>



<script src="Contenu/js/script.js">         </script>       <!-- Script  --> 
    

   


    






