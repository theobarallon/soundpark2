<?php
	$req = $bdd->query('SELECT song.ID, trackId FROM song, playlist WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW()');
	$trackIds = array();
	$trackPositions = array();
	$i = 0;
	while($trackList = $req->fetch())
	{
		$trackPositions[$i] = ($trackList[0]-($trackList[0]-1));
		$trackIds[$i] = $trackList[1];
		$i++;
	}
	$songMax=$i;
