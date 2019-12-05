
<!-- debut doctype html --> 
<!doctype html>
<html lang="fr">
<head>
        <META charset="utf-8" />
        <title><?= $titre ?></title>
        
		
        <!-- Javascript ( TinyMCE Cloud-->  
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js? apiKey =0wbmvo8vn0e8rwzz6wz60khgj1e86n1soo6sz9wjf6qtdaer"></script>
        <script>tinymce.init({ selector:'textarea' });</script>  
        <!-- Script --> 
        <script src="Contenu/js/jquery-3.2.1.js"> </script>       <!-- Bibliotheque JavaScript Jquery   --> 


        <!-- CSS -->
        <link rel="stylesheet" href="Contenu/css/style.css" /> 
      
		
        
	
										
        <!-- Viewport pour enlever le dezoom sur mobile -->   
        <META name="viewport" content="width=device-width,initial-scale=1.0,shrink-to_fit=no">          
        <!-- FONT AWESOME -->
		<link rel="stylesheet" href="Contenu/font-awesome/css/font-awesome.min.css" />
 </head>

<body class="bg-gray">
	<!-- HEADER --> 
	<header class="visiteur">	
    	<nav class="container">
        	<ul class="menu">
            	
            	<li class="selected"><a href="index.php">Accueil</a></li>
            	
            	<li ><a href=index.php?action=Contact>Contact</a></li>   
                      
            </ul>
        </nav>
        
        	<h1 class="titre-page">BILLET SIMPLE POUR L&#039;ALASKA</h1>
            <h2 class="titre-complement">de Jean FORTEROCHE</h2>        
    </header>
	<!-- Contenu --> 
         <?= $contenu ?> <!-- #contenu -->   
	<!-- Fin contenu --> 
    <footer>		
            <div class="container">
                <div class="row link-zone">       
                     
                        <div>
                           
                               <i class="fa fa-caret-right"></i> <a href="index.php?action=admin">Zone admin</a> </p> 
                        </div>
                           
                 </div>  
             </div>        
            <div class="copyright">
                <div class="container">
                   <p>&copy; Projet n° 4 - OpenClassrooms DWJ</p>            
                </div>
            </div>
     </footer>


        
    </body>
</html>