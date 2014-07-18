<?php

	include_once ('connect_sql.php');
	$req = $bdd->query('SELECT ID, pseudo FROM currator');
	$i = 0;
	$idCurrator = array();
	$pseudoCurrator = array();
	while($currator = $req->fetch())
	{
		$idCurrator[$i] = $currator[0];
		$pseudoCurrator[$i] = $currator[1];
		$i++;
	}