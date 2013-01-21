<?php
//notifications pour l'article appelées dans le haut.inc.php
$croix='<a class="cacher-notif" href="#null">X</a>';

if(isset($_SESSION['article'])){//condition de messages de notifications pour la gestion des articles.
	switch ($_SESSION['article']){
		case 'ajouté':
			echo ("<div id = 'alert' class='alert alert-success'><span>L'article a été ajouté.".$croix."</span></div>");
			break;
		case 'modifié':
			echo ("<div class='alert alert-success'><span>L'article a été modifié.".$croix."</span></div>");
			break;
		case 'supprimé':
			echo ("<div class='alert alert-error'><span>L'article a été supprimé.".$croix."</span></div>");
			break;
		case 'erreur':
			echo ("<div class='alert alert-error'><span>Il y a une erreur.".$croix."</span></div>");
			break;
	}
	unset($_SESSION['article']);
}
else if (isset($_SESSION['utilisateur'])){// condition de messages de notifications pour la gestion des connexions utilisateurs.
	switch ($_SESSION['utilisateur']){
		case 'connecté':
				echo ("<div class='alert alert-success'><span>Vous êtes bien connecté.".$croix."</span></div>");
			break;
		case 'déconnecté':
			echo ("<div class='alert alert-success'><span>Vous êtes bien déconnecté.".$croix."</span></div>");
			break;
		case 'invalide':
			echo ("<div class='alert alert-error'><span>Vos identifiants sont invalides.".$croix."</span></div>");
			break;
			case 'erreur':
			echo ("<div class='alert alert-error' ><span>Il y a une erreur.".$croix."</span></div>");
			break;
	}
	 }
else if (isset($_SESSION['tag'])){// conditions de messages de notifications pour la gestion des tags.
	switch ($_SESSION['tag']){
		case 'ajouté':
				echo ("<div class='alert alert-success'><span>Le tag a bien été ajouté.".$croix."</span></div>");
		 	break;
	}	
unset($_SESSION['utilisateur']);
}else{

	echo ("<div class='alert hide' id='notif'><span>Veuillez-remplir tous les champs</span>".$croix."</div>");// si tous les champs obligatoires ne sont pas remplis.
}

