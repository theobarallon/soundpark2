<?php
	include_once('connect_sql.php');
	$req = $bdd->prepare('SELECT subscription_date FROM user WHERE email = ?');
	$req->execute(array($_GET['pwd']));
	$result = $req->fetch();
	$subsciptionDate = $result[0];