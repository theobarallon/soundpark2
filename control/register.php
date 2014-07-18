<?php
	session_start();
	if(isset($_POST['user_email']))
	{
		include('../model/connect_sql.php');
		$req = $bdd->prepare('INSERT INTO user(email, subscription_date) VALUES(?, NOW())');
		$req->execute(array($_POST['user_email']));
		header('Location: ../view/registered.php'); 
	}
