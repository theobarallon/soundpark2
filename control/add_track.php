<?php

include_once('connect_sql.php');


if(isset($_GET['title']) AND isset($_GET['artist']) AND isset($_GET['trackArtWork']) AND isset($_GET['genre']) AND isset($_GET['trackId']) AND isset($_GET['idCurrator']) )
{
	$req = $bdd->prepare('INSERT INTO song(ID_playlist, ID_currator, artwork_url, genre, title, artist, trackId) VALUES(:ID_playlist, :ID_currator, :artwork_url, :genre, :title, :artist, :trackId)');
	$req->execute(array(
		'ID_playlist' => $_GET['playlist'],
		'ID_currator' => $_GET['idCurrator'],
		'artwork_url' => $_GET['trackArtWork'],
		'genre' => $_GET['genre'],
		'title' => $_GET['title'],
		'artist' => $_GET['artist'],
		'trackId' => $_GET['trackId']
		));
	header('Location: http://localhost:8888/soundpark2/view/create_playlist.php?addTrack=TRUE&idPlaylist='.$_GET['playlist']);
}
else
{
	echo('poulpe');
}



?>