<?php $this->titre = "Chapitre " . $chapitre['titre'];; ?>

<!-- Ici on affiche le chapitre en question --> 
<article>
    <header>
    <div id="TitreChap"> 
        <h1 class="titreBillet"><?= $chapitre['titre'] ?></h1>
    </div>

   <div id="DateChap"> 
        <time><?= $chapitre['date'] ?></time>
    </div>
    </header>
    <div id="ContenuChap"> 
    <p><?= $chapitre['contenu'] ?></p>
</div>
</article>
<hr />
<header>
    <h1 id="titreReponses">Commentaire sur le chapitre : <?=  $chapitre['titre'] ?> </h1>
</header>



<!-- Afficher les commentaire du chapitre --> 
<div id="Commentaire">
<?php foreach ($commentaires as $commentaire): ?>
    <div id="OneCommentaire">
         <div id="FirstLigneCommentaire">
            <div id="Row1">
                <p> <?= $commentaire['date'] ?> </p> 
            </div>
            <div id="Row2">
                <!-- Selectioner ce commentaire pour signaler -->
                <form method="post" action="index.php?action=signaler">
                <input type="hidden" name="id" value="<?= $commentaire['id'] ?>" />
                <input type="hidden" name="idchap" value="<?= $chapitre['id'] ?>" />
                <input type="submit" value="Signaler" class="bouton_signaler" />
                </form>
                
            </div>
         </div>
         <div id="SndLigneCommentaire">
             <p><strong><?= $commentaire['auteur'] ?></strong> dit :</p>
              <p><?= $commentaire['contenu'] ?></p>
        </div>
    </div> 
<?php endforeach; ?>
</div>
<hr />


<!-- Action commenter , le formulaire pour ajouter un commantaire --> 
<p id="titreCommentaire">  Vous pouvez nous laissez un commentaire !  </p> 

<div id="ZoneAjouterCommentaire">
<form method="post" action="index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo"  required /><br />
          

    <textarea id="txtCommentaire" name="contenu" rows="4" 
              placeholder="Votre commentaire" ></textarea><br />
    <input type="hidden" name="id" value="<?= $chapitre['id'] ?>" />
    <input type="submit" value="Commenter" class="bouton_commenter" />
</form>
</div>

<!-- Faire un lien vers chapitre Suivant et précédent --> 
<!-- Faire un bouton revenir a la liste des chapitre --> 