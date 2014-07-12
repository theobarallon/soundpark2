<?php
	if(isset($_GET['pwd']))
	{
		if($_GET['pwd'] != $password[0])
		{
			header('Location: http://localhost:8888/soundpark2/view/landing.php');
		}
	}
	else
	{
		header('Location: http://localhost:8888/soundpark2/view/landing.php');
	}