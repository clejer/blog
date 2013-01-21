<?php
	mysql_connect('localhost','root',''); // connexion au serveur et au compte utilisateur
	mysql_select_db('blog');// Connexion à la base de données
	mysql_query("SET NAMES 'utf8'");// Encodage
	SESSION_start();// Ouverture de la variable de session
