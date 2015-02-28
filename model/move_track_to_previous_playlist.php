<?php
	include_once('connect_sql.php');
	$req = $bdd->prepare('SELECT ID_playlist FROM song WHERE ID = ?');
	$req->execute(array($_GET['idSong']));
	$currentPlaylist = 0;
	if($result = $req->fetch())
	{
		$currentPlaylist = $result[0];
		$nextPlaylist = $currentPlaylist - 1;
		$req = $bdd->prepare('UPDATE song SET ID_playlist= ? WHERE ID = ?');
		$req->execute(array($nextPlaylist, $_GET['idSong']));
	}
