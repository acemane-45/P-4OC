<?php $this->titre = "Zone admin"; ?>


<!--  Panneau Admin --> 
<nav id="navAdmin">
              <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a>
              <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a>
              <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a>
              <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a>
              <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   
      </nav>



    <br/>
    <h2 class="TitrePage"> Bienvenue Jean Forteroche </h2> 
    <hr>
     <br/>
    <h2 class="center">  Pour ajouter un chapitre veuillez remplire le titre <br/>
                         et le contenu du chapitre puis cliquer sur "Ajouter un chapitre"  </h2> 

    <div id="ZoneAjouterChap">
         <form method="post" action="index.php?action=AjouterChapitre">
         <input id="TitreChapitre" name="TitreChap" type="text" placeholder="Titre de votre chapitre"  required />
         <br/>       
         <textarea id="mytextarea" name="ContenuChap" rows="4" placeholder="Contenu du chapitre"  >  </textarea>
	     <br/> 
         <input type="submit" value="Ajouter un chapitre" class="bouton_commenter" />
        </form>
    </div>
		

<!-- 

    Il faut un formulaire pour pouvoir envoyer des info dans la bdd 




arborescance :
page admin
    Chapitre 
        Ajouter un chapitre
        Modifier un chapitre 
        supprimer un chapitre 
        Lire un chapitre




    Commentaire 
        Suprimer un commentaire ( les signaler a droite )
--> 





