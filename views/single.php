<?php $this->title = "Article"; ?>


<div class='article'>
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
       <p><?= html_entity_decode($article->getContent());?></p>
    
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>

<br>
<div class="actions">
    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
</div>
<br>


<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Ajouter un commentaire</h3>
    <?php include('form_comment.php'); ?>
    <h3>Commentaires</h3>
   <?php

       foreach ($comments as $comment)
       {
        ?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= html_entity_decode($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
        <?php
        if($comment->isFlag()) {
            ?>
            <p>Ce commentaire a déjà été signalé</p>
            <?php
        } else {
            ?>
            <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php
        }
        ?>
        <br>
        <?php
    }
    ?>
</div>