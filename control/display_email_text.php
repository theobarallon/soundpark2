<?php 

	if(isset($_GET['invalidEmail']))
	{
		echo '<h2> Email invalide broda. Tu peux mieux faire : </br></h2>';
	}

	else if(isset($_GET['alreadyExists']))
	{
		echo "<h2> Tu fais déjà parti du crew, me dis pas que tu as oublié ? </br></h2>";
	}
	else 
	{
		echo"<h2>Inscris toi et profite :</br></h2>";
	}
