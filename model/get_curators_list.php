<?php
	include_once("connect_sql.php");
	$req = $bdd->query('SELECT curator.ID, pseudo, genre, avatar_url FROM curator ');
