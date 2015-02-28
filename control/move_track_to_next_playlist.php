<?php
	include_once('../model/connect_sql.php');
	include_once('../model/move_track_to_next_playlist.php');
	if($currentPlaylist>0)
	{
		header('Location: ../view/create_playlist.php?movePlaylist=TRUE&idPlaylist='.$_GET['idPlaylist']);
	}
	
	