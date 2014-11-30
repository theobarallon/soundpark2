<?php
	session_start();
	if(isset($_POST['user_email']))
	{
		$_POST['user_email'] = htmlspecialchars($_POST['user_email']);

	    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['user_email']))
	    {

	        include('../model/connect_sql.php');
	        $req = $bdd->prepare('SELECT EXISTS(SELECT * FROM user WHERE email = ?)');
	        $req->execute(array($_POST['user_email']));
	        $exists = $req->fetch();
	        if($exists[0])
	        {
	        	header('Location: ../view/fromshare.php?alreadyExists=TRUE&trackId='.$_POST['trackId']); 
	        	//include_once('../view/landing.php?alreadyExists=TRUE');
	        }
	        else
	        {
	        	$req = $bdd->prepare('INSERT INTO user(email, subscription_date) VALUES(?, NOW())');
				$req->execute(array($_POST['user_email']));
				include_once('mailchimpUserNewSubscribe.php');
				header('Location: ../view/registered.php'); 
	        }			
	    }
	    else
	    {
	        header('Location: ../view/fromshare.php?invalidEmail=TRUE&trackId='.$_POST['trackId']); 
	        //include_once('../view/landing.php?invalidEmail=TRUE');
	    }
	}