<?php
	if(isset($_GET['pwd']))
	{
		if($_GET['pwd'] != $password[0])
		{
			header('Location: http://soundpark.fm/view/landing.php');
		}
	}
	else
	{
		header('Location: http://soundpark.fm/view/landing.php');
	}