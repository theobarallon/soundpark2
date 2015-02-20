<?php

include_once('../model/connect_sql.php');

$numberOfTracks = intval($_POST['numberOfTracks']);

//echo($numberOfTracks);

for($index = 0; $index < $numberOfTracks; $index++)
{
	
	$req = $bdd->prepare('UPDATE song SET genre=?, title=?, artist=?, ID_curator=?, playlistOrder=? WHERE song.ID = ?');
	$req->execute(array(
		$_POST['song_genre'.$index],
		$_POST['song_title'.$index],
		$_POST['song_artist'.$index],
		$_POST['idCurator'.$index],
		$_POST['songOrder'.($index+1)],
		$_POST['songId'.$index]
	));
}

//echo $_POST['idPlaylist'];
header('Location: ../view/create_playlist.php?modifyPlaylist=TRUE&idPlaylist='.$_POST['idPlaylist']);



?>