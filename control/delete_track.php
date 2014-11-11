<?php
	include_once("../model/connect_sql.php");
	if(isset($_GET['idSong']))
	{
		$req = $bdd->prepare('DELETE FROM song WHERE id = ?');
		$req->execute(array($_GET['idSong']));
		header('Location: http://soundpark.fm/view/create_playlist.php');
	}
	else
	{
		echo('No songId');
	}
	