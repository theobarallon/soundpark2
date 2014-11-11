<?php

	include_once ('connect_sql.php');
	$req2 = $bdd->query('SELECT ID, pseudo FROM curator');
	$i = 0;
	$idCurator = array();
	$pseudoCurator = array();
	while($curator = $req2->fetch())
	{
		$idCurator[$i] = $curator[0];
		$pseudoCurator[$i] = $curator[1];
		$i++;
	}