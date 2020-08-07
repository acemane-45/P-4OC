<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $title ?></title>
    <meta name="description" content="Billet simple pour l'Alaska Un roman de Jean Forteroche" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="https://cdn.tiny.cloud/1/0wbmvo8vn0e8rwzz6wz60khgj1e86n1soo6sz9wjf6qtdaer/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script language="javascript" type="text/javascript">
        tinyMCE.init({
            selector: 'textarea',
            plugins: '',
            toolbar_mode: 'floating',
                entity_encoding : "raw",
                forced_root_block : false,
                force_br_newlines : true,
                force_p_newlines : false
                });
</script>
</head>

<body>
<header>
<nav class="menu">
<ul>
<li><a href="../public/index.php">Accueil</a></li>
<li><a href="../public/index.php?route=listarticles">liste des articles</a></li>
</nav>

</header>
<div class="titre">
<h1>Bienvenue sur mon blog</h1>
<p>Un billet pour l'ALASKA</p>
</div>
    <div id="content">
   
   
        <?= $content ?>
    </div>
    <footer>
  
 
 
</footer>
</body>

