<?php

	include_once("../model/connect_sql.php");
	if(isset($_GET['trackId']))
	{
		$req = $bdd->prepare('SELECT ID FROM song WHERE trackId = ?');
		$req->execute(array($_GET['trackId']));
		$Id = $req->fetch();
		$req = $bdd->prepare('INSERT INTO soundpark2.like(ID_song, ID_user, date) VALUES(?, 8, NOW())');
		$req->execute(array($Id[0]));
		$req = $bdd->prepare('SELECT COUNT(*) FROM soundpark2.like WHERE ID_song = ?');
		$req->execute(array($Id[0]));
		$nbLikes = $req->fetch();
		echo($nbLikes[0]);
	}
	