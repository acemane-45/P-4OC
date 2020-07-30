<?php $this->title = 'Accueil'; ?>



<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>

    

<div class="menu_admin">
<ul>

<?php
if ($this->session->get('pseudo')) {
    ?>
   <li> <a href="../public/index.php?route=logout">Deconnexion</a></li>
   <li> <a href="../public/index.php?route=profile">Profil</a></li>
    <?php if($this->session->get('role') === 'admin') { ?>
      <li>  <a href="../public/index.php?route=administration">Administration</a></li>
    <?php } 
} else {
    ?>
    
    
   <li> <a href="../public/index.php?route=register">Inscription</a></li>
   <li> <a href="../public/index.php?route=login">Connexion</a></li>
    <?php
}
?>
</div>

<?php
foreach ($articles as $article)
{
    ?>
    <div>
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
        <p><?= htmlspecialchars($article->getContent());?></p>
       
        <p>Creer le : <?= htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>
    <?php
}
?>