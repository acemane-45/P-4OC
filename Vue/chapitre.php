<?php $this->titre = "Chapitres"; ?>

		<div id= slide>
			<figure>
            <img src="Images/slide.jpg" alt="Slide"/>
				<figcaption>                
                <h2  id="titre">Billet simple pour l'Alaska</h2>
				</figcaption>
			</figure> 
		</div>


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