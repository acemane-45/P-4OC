<?php $this->titre = "Nouveau Billet"; ?>

<h2>Administration</h2>

<h4> Créer un nouveau chapitre :</h4>

  <form id="formChap" name="formConf" method="post" action="newbillet/publier">
	<input type="text" id="titleChapter" name="titre" placeholder="Titre du chapitre"/>
    <textarea id="mytextarea" name="contenu"></textarea>
	<input type="button" class="buttonsub confirm" value="Publier"/>
	<input type="button" class="buttonsub" value="Annuler" onclick="history.back()"  />
  </form>