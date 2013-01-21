<?php
// On démarre la session AVANT d'écrire du code HTML
        // session_start();
	    require("libs/Smarty.class.php"); // ajout de la classe Smarty
		include('includes/connexion.inc.php');//ajout de la page connexion.inc.php
		include('includes/haut.inc.php');//ajout de la page haut.inc.php
		include('includes/fonctions.inc.php');// ajout de la page fonctions.inc.php

        $smarty=new Smarty();// Instanciation de la classe Smarty

	//PAGINATION
	$app=3;//articles par pages
	$page=(int)var_get('p');//page courante
	if(!$page) $page=1; //si la variable page n'existe, on la place à 1
	$debut=($page-1)*$app;//index de départ
	$rech=mysql_real_escape_string(var_get('r'));//recherche
	$tag = mysql_real_escape_string(var_get('t')); //Tag
	
	
	$where=isset($rech)?"WHERE texte LIKE '%$rech%'":''; //condition si recherche
	
	$sql=("SELECT COUNT(*) AS total FROM articles $where");
	$result = mysql_query($sql);
	$data = mysql_fetch_array($result); //fournit un tableau, d'où le besoin du $data
	$total=$data['total'];//total d'articles
	$nbpages=ceil($total/$app); //permet d'arrondir au superieur le nombre de pages nécessaires

	$sql="SELECT * FROM articles $where ORDER BY date DESC LIMIT $debut,$app";
	$result = mysql_query($sql);
	$h2=($rech)?'Résultats de la recherche "'.$rech.'"':'Derniers articles';
	$smarty->assign('h2',$h2);
	$art=array();
	
	while($data = mysql_fetch_array($result)){ //boucle pour la liste d'articles 

				$art[] = $data;

	}

$rech=urlencode($rech);
$rech=htmlspecialchars($rech);
$pager=($rech)?'&r='.$rech.'':'';

if (isset($_COOKIE['sid'])){
		$online=1;
		$smarty->assign("online",$online);//articles
	}

	$smarty->assign("h2",$h2);//titre
	$smarty->assign("page",$page);//page
	$smarty->assign("pager",$pager);//pager
	$smarty->assign("nbpages",$nbpages);//nombre de pages
	$smarty->assign('articles', $art);
	$smarty->display("templates/index.phtml"); 
	include('includes/bas.inc.php');