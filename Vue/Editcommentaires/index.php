<?php $this->titre = "Gestions des Commentaires"; ?>

<h2>Administration</h2>


<div id="menuAdmin">
	<a href="admin" > <button type="button" class="buttonMenu">Article(s)</button></a>
	<a href="editcommentaires" > <button type="button" class="buttonMenu">Commentaire(s)</button></a>
</div>


<h3>Listes des commentaires signalés:</h3>

<div class="liste">
	<h4>Nom</h4>
	<h4>Commentaire</h4>
	<h4></h4>
</div>

<?php foreach ($commentaires[1] as $commentaire):
if ($commentaire['flag']== 1 ):
	?>
<article>
        <header>
			<div class="liste">
				<a href="<?= "editcommentaires/index/" . $this->nettoyer($commentaire['id']) ?>">
					<p><?= $this->nettoyer($commentaire['auteur']) ?></p>
				</a>
				<p><?= $this->nettoyer($commentaire['contenu']) ?></p>
				<div id="editChap">
				<!--Sauvegarder-->
				<form method="post" class ="<?= $commentaire['id'] ?> sauvegarde" action="editcommentaires/save">
					<input type="hidden" name="id" value="<?= $commentaire['id'] ?>" />
					<button type="button" name="<?= $commentaire['id'] ?>" class="buttonCheck save"><i class="fas fa-check"></i></button>
				</form>
				<!--Supprimer-->
				<form method="post" class ="<?= $commentaire['id'] ?> supprimeCom" action="editcommentaires/supprimer">
					<input type="hidden" name="id" value="<?= $commentaire['id'] ?>" />
					<button type="button" name="<?= $commentaire['id'] ?>" class="buttonDelete deleteCom" ><i class="fas fa-times"></i></button>
				</form>	
				</div>
			</div>
        </header>
    </article>
    <hr />
<?php endif; 
endforeach; ?>


<h3>Listes des commentaires :</h3>

<div class="liste">
	<h4>Nom</h4>
	<h4>Commentaire</h4>
	<h4></h4>
</div>

<?php
foreach ($commentaires[0] as $commentaire):
if ($commentaire['flag']== 0 ):
    ?>
    <article>
        <header>
			<div class="liste">
				<a href="<?= "editcommentaires/index/" . $this->nettoyer($commentaire['id']) ?>">
					<p><?= $this->nettoyer($commentaire['auteur']) ?></p>
				</a>
				<p><?= $this->nettoyer($commentaire['contenu']) ?></p>
				<!--Supprimer-->
				<form method="post" class ="<?= $commentaire['id'] ?> supprimeCom" action="editcommentaires/supprimer">
					<input type="hidden" name="id" value="<?= $commentaire['id'] ?>" />
					<button type="button" name="<?= $commentaire['id'] ?>" class="buttonDelete deleteCom" ><i class="fas fa-times"></i></button>
				</form>		
			</div>
        </header>
    </article>
    <hr />
<?php endif; 
endforeach; ?>