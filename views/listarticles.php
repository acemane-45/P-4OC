<?php $this->title = 'Listarticles'; ?>




<?php
foreach ($articles as $article)
{
    ?>
    <div class = 'list_article'>
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
        <p><?= html_entity_decode($article->getContent());?></p>
       
        <p>Creer le : <?= htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>
    <?php
}
?>
