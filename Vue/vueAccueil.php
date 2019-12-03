<?php $titre = 'Blog de Jean Forteroche'; ?>

<?php ob_start(); ?>
<?php foreach ($billets as $billet): ?>
  <article>
    <header>
    <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
      <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
      <time><?= $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
  </article>
  <hr />
<?php endforeach; ?>
