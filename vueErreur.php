<?php $titre = 'Blog de Jean Forteroche'; ?>

<?php ob_start() ?>
<p>Une erreur est survenue : <?= $msgErreur ?></p><!-- message en cas d'erreur-->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>