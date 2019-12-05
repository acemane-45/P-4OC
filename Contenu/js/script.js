// Script effectuer uniquement sur la page de suppression de chapitre 
$('input').on( 'click', function attention() {

	resultat=window.confirm('Attention, vous êtes sur le point de supprimer un chapitre, voulez-vous continuer ?');
	if (resultat==1)
	{
	}
	else
	{
		return false;
	}

    });

    