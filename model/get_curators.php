<?php

	include_once ('connect_sql.php');
	$req = $bdd->query('SELECT ID, pseudo FROM curator');
	$i = 0;
	$idCurator = array();
	$pseudoCurator = array();
	while($curator = $req->fetch())
	{
		$idCurator[$i] = $curator[0];
		$pseudoCurator[$i] = $curator[1];
		$i++;
	}