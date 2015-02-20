<?php
include_once('connect_sql.php');
if($playlistId)
{
	$req = $bdd->prepare('SELECT trackId FROM song, playlist WHERE song.ID_playlist=playlist.ID AND song.ID_playlist=? ORDER BY song.playlistOrder, song.id');
	$req->execute(array($playlistId));
}
else
{
	$req = $bdd->query('SELECT trackId FROM song, playlist WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW() ORDER BY song.playlistOrder, song.id');
}
	