<?php $this->titre = "Contact"; ?>

<h2 class="TitrePage" > Contact </h2> 
<hr>

<h2> Laissez-moi un message ! </h2> 


<div id="ZoneAjouterChap">
        <form method="post" action="index.php?action=Message">
                Nom :  </br> 
                <input type="text" name="xx"  id="nameContact" value="   "  />  </br> 
                Votre E-mail : </br> 
                <input type="text" name="idChap"  value="  "  /> </br> 
                <br/>
                Votre message : </br> 
                <textarea name="ModifContenuChap"  rows="10" cols="50">
                
                </textarea>   
 
                <input type="submit" value="Envoyer" class="bouton_contact" />
                </br>
    </form>
</div>