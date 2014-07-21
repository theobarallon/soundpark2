<?php
	include_once("connect_sql.php");
	$req = $bdd->query('SELECT song.ID, ID_currator, ID_playlist, artwork_url, genre, title, artist, trackId FROM song, playlist WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW()');
	
