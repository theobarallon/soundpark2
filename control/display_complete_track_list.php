<?php
	include_once("../model/get_complete_track_list.php");
	echo '<ul>';
	while($trackList = $req->fetch())
	{
			echo('<li>'.$trackList[5].' - '.$trackList[6].' - '.$trackList[4].'<a href="../control/delete_track.php?idSong='.$trackList[0].'"> Supprimer </a></li>');
	}
	echo '</ul>';