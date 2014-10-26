<?php 

	if(isset($_GET['invalidEmail']))
	{
		echo "<h2>Problème d'adresse mail. Essaye encore.</br></h2>";
	}

	else if(isset($_GET['alreadyExists']))
	{
		echo "<h2>Malheureusement, tu ne peux pas t'inscrire deux fois.</br></h2>";
	}
	else 
	{
		echo"<h2>Inscris toi et profite :</br></h2>";
	}
