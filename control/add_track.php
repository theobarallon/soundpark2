<?php

include_once('connect_sql.php');


if(isset($_GET['title']) AND isset($_GET['artist']) AND isset($_GET['trackArtWork']) AND isset($_GET['genre']) AND isset($_GET['trackId']) AND isset($_GET['idCurator']) )
{
	$req = $bdd->prepare('INSERT INTO song(ID_playlist, ID_curator, artwork_url, genre, title, artist, trackId, duration) VALUES(:ID_playlist, :ID_curator, :artwork_url, :genre, :title, :artist, :trackId, :duration)');
	$req->execute(array(
		'ID_playlist' => $_GET['playlist'],
		'ID_curator' => $_GET['idCurator'],
		'artwork_url' => $_GET['trackArtWork'],
		'genre' => $_GET['genre'],
		'title' => $_GET['title'],
		'artist' => $_GET['artist'],
		'trackId' => $_GET['trackId'],
		'duration' => $_GET['duration'],
		));
	header('Location: http://soundpark.fm/view/create_playlist.php?addTrack=TRUE&idPlaylist='.$_GET['playlist']);
}
else if(isset($_GET['title']) AND isset($_GET['artist']) AND isset($_GET['trackArtWork']) AND isset($_GET['trackId']) AND isset($_GET['idCurator']) )
{
	$req = $bdd->prepare('INSERT INTO song(ID_playlist, ID_curator, artwork_url, title, artist, trackId, duration) VALUES(:ID_playlist, :ID_curator, :artwork_url, :title, :artist, :trackId, :duration)');
	$req->execute(array(
		'ID_playlist' => $_GET['playlist'],
		'ID_curator' => $_GET['idCurator'],
		'artwork_url' => $_GET['trackArtWork'],
		'title' => $_GET['title'],
		'artist' => $_GET['artist'],
		'trackId' => $_GET['trackId'],
		'duration' => $_GET['duration'],
		));
	header('Location: http://soundpark.fm/view/create_playlist.php?addTrack=TRUE&idPlaylist='.$_GET['playlist']);
}
else
{
	echo('poulpe');
}



?>