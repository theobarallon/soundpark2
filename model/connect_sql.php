<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=soundpark2', 'root', 'root');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
