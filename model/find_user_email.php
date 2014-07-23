<?php 
	if(isset($_GET['pwd']))
	{
		$req = $bdd->prepare('SELECT email  FROM user WHERE email = ?') or die(print_r($bdd->errorInfo()));
		$req->execute(array($_GET['pwd']));
	}
	else
	{
		header('Location: http://localhost:8888/soundpark2/view/landing.php');
	}
	

