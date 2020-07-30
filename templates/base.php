<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $title ?></title>
    <meta name="description" content="Billet simple pour l'Alaska Un roman de Jean Forteroche" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://cdn.tiny.cloud/1/0wbmvo8vn0e8rwzz6wz60khgj1e86n1soo6sz9wjf6qtdaer/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    width: 600,
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullpage | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>
</head>

<body>
<header>
<nav>
<ul>
<li><a href="../public/index.php">Accueil</a></li>
<li><a href="../public/index.php?route=listarticles">liste des articles</a></li>
</nav>

</header>
<h1>Bienvenue sur mon blog</h1>
<p>Un billet pour l'ALASKA</p>
    <div id="content">
   
   
        <?= $content ?>
    </div>
    <footer>
  
 
 
</footer>
</body>

