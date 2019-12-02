<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>projet 04</title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1 id="titreBlog">blog de Jean Forteroche</h1></a>
        <p>Je vous souhaite la bienvenue sur mon blog.</p>
      </header>
      <div id="contenu">
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=blog-p4;charset=utf8', 
          'root', '');
        $billets = $bdd->query('select id as id, date_billet as date,'
          . ' titre_billet as titre, contenu_billet as contenu from t_billet'
          . ' order by id desc');
        foreach ($billets as $billet): ?>
          <article>
            <header>
              <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
              <time><?= $billet['date'] ?></time>
            </header>
            <p><?= $billet['contenu'] ?></p>
          </article>
          <hr />
        <?php endforeach; ?>
      </div> <!-- #contenu -->
      <footer id="piedBlog">
        Blog realiser avec PHP, HTML5 et CSS.
      </footer>
    </div> <!-- #global -->
  </body>
</html>
