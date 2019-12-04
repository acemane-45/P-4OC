<?php $this->titre = "Blog - Connexion" ?>

<div class="msgErreur">
<?php if (isset($msgErreur)): ?>
    <p><?= $msgErreur ?></p>
<?php endif; ?>
</div>


<form id="formConnect" action="connexion/connecter" method="post">
    <input name="login" type="text" placeholder="Entrez votre login" required autofocus>
    <input name="mdp" type="password" placeholder="Entrez votre mot de passe" required>
    <button id="submitConnect" type="submit">Connexion</button>
</form>