<?php
	function var_post($champ) {
		return (isset($_POST[$champ]))? $_POST[$champ]:false; //retourne la valeur du champ s'il existe, si non : renvoie false
	}

	function var_get($champ) {
		return (isset($_GET[$champ]))? $_GET[$champ]:false;//retourne la valeur du champ s'il existe, si non : renvoie false
	}

	function requete_notif($sql,$var,$val){
		if (mysql_query($sql)) $_SESSION[$var]=$val;
		else $_SESSION[$var]='erreur';// exécute la requête en fonction des paramètres passés.
}