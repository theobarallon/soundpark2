<?php
	include_once("connect_sql.php");
	$req = $bdd->prepare('DELETE FROM song WHERE id = ?');
	$req->execute(array($_GET['idSong']));
	header('Location: http://soundpark.fm/view/create_playlist.php');