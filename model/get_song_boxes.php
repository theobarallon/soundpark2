<?php
include_once('connect_sql.php');
$req = $bdd->query('SELECT artwork_url, artist, title, genre, pseudo FROM song, playlist, currator WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW() AND song.ID_currator = currator.ID ORDER BY song.id');
