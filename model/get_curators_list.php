<?php
	include_once("connect_sql.php");
	$req = $bdd->query('SELECT curator.ID, pseudo, genre, avatar_url, link FROM curator ');
