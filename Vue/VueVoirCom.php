<?php $this->titre = "Zone Admin"; ?>

<nav id="navAdmin">
              <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a>
              <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a>
              <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a>
              <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a>
              <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   
      </nav>



<!-- Liste des chapitres A retirer  --> 
<h2 class="TitrePage" > Commentaires </h2> 
<hr>

 

      <div id="ContenerDivSignaler1"> 
      <h2> Voici les commentaires signalé par les utilisateurs : </h2> 
          <?php foreach ($ListeCommentaires as $CommentaireSignaler): ?>
              <div id="ComSignaler"> 
                  <?= $CommentaireSignaler['COM_AUTEUR'] ?> a dit : <br/><hr> <?= $CommentaireSignaler['COM_CONTENU'] ?> <br/> 
                  <!-- Selectioner ce commentaire pour le Suprimer -->
                  <form method="post" action="index.php?action=SupprimerCommentaire">
                      <input type="hidden" name="com_id" value=" <?= $CommentaireSignaler['COM_ID'] ?> " />  
                      <input type="hidden" name="idchapsupr" value="<?= $CommentaireSignaler['CHA_ID'] ?>" />
                      <input type="submit" value="Supprimer le commentaire" class="bouton_signaler" />
                      </form>
              </div> 
          <?php endforeach; ?>          
     </div>
     

    <!-- Commentaire non signaler --> 
     <div id="ContenerDivSignaler2"> 
     <h2> Voici les commentaires non signaler</h2>
          <?php foreach ($ListeCommentairesNonSignaler as $CommentaireNonSignaler): ?>
              <div id="ComSignaler"> 
                  <?= $CommentaireNonSignaler['COM_AUTEUR'] ?> a dit :<br/><hr>  <?= $CommentaireNonSignaler['COM_CONTENU'] ?> <br/> 
                    <!-- Selectioner ce commentaire pour le Suprimer -->
                      <form method="post" action="index.php?action=SupprimerCommentaire">
                      <input type="hidden" name="com_id" value=" <?= $CommentaireNonSignaler['COM_ID'] ?> " />  
                      <input type="hidden" name="idchapsupr" value="<?= $CommentaireNonSignaler['CHA_ID'] ?>" />
                      <input type="submit" value="Supprimer le commentaire" class="bouton_signaler" />
                      </form>
              </div> 
          <?php endforeach; ?>
     </div>
       


 



