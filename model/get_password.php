<?php 

	$req = $bdd->query('SELECT password_playlist.password  FROM playlist, password_playlist WHERE playlist.date_end >= NOW() AND playlist.date_start <= NOW() AND playlist.ID = password_playlist.ID_playlist ') or die(print_r($bdd->errorInfo()));
	$password = $req->fetch();
	

