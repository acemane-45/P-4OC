<?php $this->titre = "Mon Blog - " . $this->nettoyer($billet['titre']); ?>

<article>
    <header>
        <h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1>
        <time><?= $this->nettoyer($billet['date']) ?></time>
    </header>
    <p><?= $this->nettoyer($billet['contenu']) ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">commentaire <?= $this->nettoyer($billet['titre']) ?></h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
    <p><?= $this->nettoyer($commentaire['auteur']) ?> dit :</p>
    <p><?= $this->nettoyer($commentaire['contenu']) ?></p>
    <!--Signaler-->
	<form method="post" class="<?= $commentaire['id'] ?> signaler" action="billet/signaler">
		<input type="hidden" name="idCommentaire" value="<?= $commentaire['id'] ?>" />
		<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
		<input type="button" class="buttonSignal signal" name="<?= $commentaire['id'] ?>" value="signaler le commentaire"/>
	</form>
<?php endforeach; ?>
<hr />
<form method="post" action="billet/commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>

