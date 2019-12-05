<?php $this->titre = "Zone Admin"; ?>

<nav id="navAdmin">
              <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a>
              <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a>
              <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a>
              <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a>
              <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   
      </nav>
      <h2 class="TitrePage" > Modifier un chapitre </h2> 
      <hr> 
    <h2> Veuillez selectionner un chapitre pour le modifier </h2>
   <?php foreach ($chapitre as $oneChapitre): ?> 
    <article>
        <header>
            <div id="TitreChap">
                 <a href="<?= "index.php?action=chapitremodif&id=" . $oneChapitre['id'] ?>">  <!-- Lien avec info du chapitre --> 
                 <h1 class="titreBillet"><?= $oneChapitre['titre'] ?></h1> <!-- Titre du bilet --> 
                 </a>
            </div> 
        </header>
    </article>
    <hr>
<?php endforeach; ?>

    


    


        

             
     
      
    

