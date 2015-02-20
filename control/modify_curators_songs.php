<?php

include_once('../model/connect_sql.php');

$numberOfTracks = intval($_POST['numberOfTracks']);

//echo($numberOfTracks);


for($index = 0; $index < $numberOfTracks; $index++)
{
	/*echo($_POST['song_genre'.$index].
		$_POST['song_title'.$index].
		$_POST['song_artist'.$index].
		$_POST['idCurator'.$index].
		"lol".$_POST['songId'.$index]);*/
	
	$req = $bdd->prepare('UPDATE proposed_song SET genre=?, title=?, artist=?, ID_curator=? WHERE proposed_song.ID = ?');
	$req->execute(array(
		$_POST['song_genre'.$index],
		$_POST['song_title'.$index],
		$_POST['song_artist'.$index],
		$_POST['idCurator'.$index],
		$_POST['songId'.$index]
	));
}

//echo $_POST['idPlaylist'];

if(isset($_GET['page']))
	{
			header('Location: ../view/curators_songs_history.php?message=Updated');
	}
	else
	{
			header('Location: ../view/curators_songs_new.php?message=Updated');
	}




