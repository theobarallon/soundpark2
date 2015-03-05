<?php
	if(isset($_GET['pwd']))
	{
		include_once('connect_sql.php');
		$req=$bdd->prepare('SELECT ID FROM user WHERE user.email = ? ');
		$req->execute(array($_GET['pwd']));
		if($rep = $req->fetch())
		{
			$userId = $rep[0];
		}
	}

	