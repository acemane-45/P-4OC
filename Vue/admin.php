<?php $this->titre = "Administration"; ?>

<h2>Administration</h2>

<div id="menuAdmin">
	<a href="admin" > <button type="button" class="buttonMenu">Article(s)</button></a>
	<a href="editcommentaires" > <button type="button" class="buttonMenu">Commentaire(s)</button></a>
</div>

<h3> Vos chapitres :</h3>

<?php foreach ($billets as $billet):
    ?>
    <article>
        <header>
			<div class="liste">
				<a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
					<h4 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h4>
				</a>
				<div id="editChap">
					<!--Modifier-->
					<form method="post" action="editbillets">
						<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
						<button type="submit" class="buttonEdit"><i class="fas fa-pencil-alt"></i></button>
					</form>
					<!--Supprimer-->
					<form method="post" id="<?= $billet['id'] ?>" name="formSupp" action="admin/supprimer">
						<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
						<button type="button" name="<?= $billet['id'] ?>" class="buttonDelete delete"><i class="fas fa-times"></i></button>
					</form>	
				</div>
			</div>
        </header>
    </article>
    <hr />
<?php endforeach; ?>

<a href="newbillet" ><button type="button" class="buttonsub">+ Creer chapitre</button></a>