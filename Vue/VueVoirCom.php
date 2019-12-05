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
              <p>Billet numero :</p><?= $CommentaireSignaler['id_billet'] ?> <br/> <?= $CommentaireSignaler['auteur_com'] ?><br/> a dit : <br/>  <?= $CommentaireSignaler['contenu_com'] ?> <br/> 
                  <!-- Selectioner ce commentaire pour le Suprimer -->
                  <form method="post" action="index.php?action=SupprimerCommentaire">
                      <input type="hidden" name="com_id" value=" <?= $CommentaireSignaler['id'] ?> " />  
                      <input type="hidden" name="idchapsupr" value="<?= $CommentaireSignaler['id_billet'] ?>" />
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
              <p>Billet numero :</p><?= $CommentaireSignaler['id_billet'] ?><br/><?= $CommentaireNonSignaler['auteur_com'] ?><br/> a dit :<br/>  <?= $CommentaireNonSignaler['contenu_com'] ?> <br/> 
                    <!-- Selectioner ce commentaire pour le Suprimer -->
                      <form method="post" action="index.php?action=SupprimerCommentaire">
                      <input type="hidden" name="com_id" value=" <?= $CommentaireNonSignaler['id'] ?> " />  
                      <input type="hidden" name="idchapsupr" value="<?= $CommentaireNonSignaler['id_billet'] ?>" />
                      <input type="submit" value="Supprimer le commentaire" class="bouton_signaler" />
                      </form>
              </div> 
          <?php endforeach; ?>
     </div>
       


 



