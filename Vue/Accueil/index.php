<?php $this->titre = "Blog de Jean Forteroche"; ?>

<?php foreach ($billets as $billet):
    ?>
    <h2 id="titre">Billet simple pour l'Alaska</h2>
    <h3>Derniers chapitres : </h3>
    <article>
        <header>
            <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
                <h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1>
            </a>
            <time><?= $this->nettoyer($billet['date']) ?></time>
        </header>
        <p><?= $this->nettoyer($billet['contenu']) ?></p>
    </article>
    <hr />
<?php endforeach; ?>
