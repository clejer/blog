<?php 
	include('includes/connexion.inc.php'); // ajout de la page connexion.inc.php
	include('includes/haut.inc.php'); // ajout de la page haut.inc.php
	include('includes/fonctions.inc.php'); // ajout de la page fonctions.inc.php
    require("libs/Smarty.class.php"); // ajout de la classe smarty
	$smarty=new smarty();// Instanciation de smarty.

	//Modification
	$id =(int)var_get('id');
	$action_label=($id)?'Modifier':'Ajouter';
	$rech=mysql_real_escape_string(var_get('r'));
	$rep=array(); 
	
	If ($id){
			// selection du contenu de la table article et de la table tag
			$resultat = mysql_query("SELECT * FROM articles WHERE id='$id'"); 
			$rep= mysql_fetch_array($resultat);
			$idtag=$rep['id_tag'];
			$data=mysql_query("SELECT * FROM tags WHERE id='$idtag'");
			$data = mysql_fetch_array($data);
			$smarty->assign("data",$data);
			$smarty->assign("rep",$rep);
	}


	If (isset($_POST['post'])){
	//vérification des valeurs entrées
		$id= var_post('id');
		$titre= var_post('titre');
		$texte= var_post('texte');
		$tag= var_post('tag');
		
		$date = date("Y-m-d H:i:s");
		$erreur=0;
	
		If (!$titre || !$texte){ //données non remplies ??
			
		requete_notif('','article','erreur'); 
	
		}
	Else {
	
	
		$titre = mysql_real_escape_string($titre);
		$texte = mysql_real_escape_string($texte);
		$date = mysql_real_escape_string($date);
		$tag = mysql_real_escape_string($tag);
		var_dump($tag);
		
		If ($tag){ //si un tag est entré
				$tag = mysql_real_escape_string($tag);
				$sql=("SELECT * FROM tags WHERE nom='$tag'");
				$result = mysql_query($sql);
				$data = mysql_fetch_array($result);
				$idtag=$data['id'];
				if(!$data) {
					$sql=("INSERT INTO tags(nom) VALUES ('$tag')");
					$data=mysql_query($sql);
					$idtag=mysql_insert_id();
				}
			}

		  var_dump($_FILES['image']);
		  $maxsize = 1048576;

		$ext_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
		if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";
		if ($_FILES['image']['size'] > $maxsize) $erreur = "Le fichier est trop gros";
		$ext = substr(strrchr($_FILES['image']['name'], '.'),1);
		if (in_array($ext, $ext_valides)) echo "Extension correcte";
	
		If ($id)
			requete_notif("UPDATE articles SET titre='$titre', texte='$texte' WHERE id='$id'",'article','modifié'); //fonction qui modifie et qui teste
		else
			requete_notif("INSERT INTO articles (titre, texte, date) VALUES ('$titre','$texte', '$date')",'article','ajouté'); //fonction ajoute et qui teste
			$id = mysql_insert_id();
		    var_dump($id);
			$nom = "fichiers/{$id}.{$ext}";
			$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
		
		If ($resultat) echo "Transfert réussi";
		
		//redirection
		header('Location:index.php'); 
		exit();
	}
}
		//toutes les assignations smarty
		$smarty->assign("action_label",$action_label);
		$smarty->assign("id",$id);
		$smarty->display("templates/article.phtml");
		require_once('includes/bas.inc.php');