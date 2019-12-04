<?php $this->titre = "Chapitres"; ?>

		               
                <h2  id="titre">Billet simple pour l'Alaska</h2>
		

<?php foreach ($billets as $billet):
    ?>
    <article>
        <header>
            <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
                <h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1>
            </a>
        </header>
    </article>
    <hr />
<?php endforeach; ?>