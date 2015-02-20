<?php
include_once('connect_sql.php');
if($playlistId)
{
	$req = $bdd->prepare('SELECT artwork_url, artist, title, song.genre, pseudo, trackId, permalink_url FROM song, playlist, curator WHERE song.ID_playlist=playlist.ID AND song.ID_curator = curator.ID AND song.ID_playlist=? ORDER BY song.playlistOrder, song.id');
	$req->execute(array($playlistId));
}
else
{
	$req = $bdd->query('SELECT artwork_url, artist, title, song.genre, pseudo, trackId, permalink_url FROM song, playlist, curator WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW() AND song.ID_curator = curator.ID ORDER BY song.playlistOrder, song.id');
}

