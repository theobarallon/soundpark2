<?php
	include_once("connect_sql.php");
	if (isset($_GET['idPlaylist'])) 
	{
		$req = $bdd->prepare('SELECT song.ID, pseudo, ID_playlist, artwork_url, song.genre, title, artist, trackId, playlistOrder, permalink_url FROM song, playlist, curator WHERE song.ID_curator = curator.ID AND song.ID_playlist=playlist.ID AND playlist.ID = ? ORDER BY playlistOrder');
		$req->execute(array($_GET['idPlaylist']));
	}
	else {
		$req = $bdd->query('SELECT song.ID, pseudo, ID_playlist, artwork_url, song.genre, title, artist, trackId, playlistOrder, permalink_url FROM song, playlist, curator WHERE song.ID_curator = curator.ID AND song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW() ORDER BY playlistOrder');
	}
	
