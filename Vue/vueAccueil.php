<?php $this->titre = "Acceuil"; ?>

<!-- Afficher les listes des chapitre --> 
<?php foreach ($chapitre as $oneChapitre): ?> 
    <article>
        <header>
            <div id="TitreChap">
                 <a href="<?= "index.php?action=chapitre&id=" . $oneChapitre['id'] ?>">  <!-- Lien avec info du chapitre --> 
                 <h1 class="titreBillet"><?= $oneChapitre['titre'] ?></h1> <!-- Titre du bilet --> 
                 </a>
            </div>

            <div id="DateChap"> 
                <time>
                <?= $oneChapitre['date'] ?> <!-- date du bilet --> 
                </time>
            </div>  
        </header>

        <div id="ContenuChap"> 
            <p>
            <?=  substr(  $oneChapitre['contenu']  , 0, 150   )  ?> <!-- Contenu du bilet avec les 150 premier caractére afficher  --> 
            </p>
        </div>

    </article>
    <hr />
<?php endforeach; ?>





         
           
          
        
            
               
         







