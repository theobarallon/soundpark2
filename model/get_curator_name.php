<?php
	include_once('connect_sql.php');
	$req = $bdd->prepare('SELECT pseudo FROM curator WHERE ID = ?');
	$req->execute(array($curatorId));
	$data = $req->fetch();
	$curatorName = $data[0];