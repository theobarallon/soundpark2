<?php
	if(isset($_GET['playlistId']))
	{
		$req = $bdd->prepare('SELECT song.ID, trackId, playlistOrder FROM song WHERE ID_playlist=? ORDER BY playlistOrder, ID ASC');
		$req->execute(array($_GET['playlistId']));
		$trackIds = array();
		$trackPositions = array();
		$i = 0;
		while($trackList = $req->fetch())
		{
			$trackPositions[$i] = $trackList[2];
			$trackIds[$i] = $trackList[1];
			$i++;
			
		}
		$songMax=$i;
	}
	else
	{
		$req = $bdd->query('SELECT song.ID, trackId, playlistOrder  FROM song, playlist WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW() ORDER BY playlistOrder ASC');
		$trackIds = array();
		$trackPositions = array();
		$i = 0;
		while($trackList = $req->fetch())
		{
			$trackPositions[$i] = $trackList[2];
			$trackIds[$i] = $trackList[1];
			$i++;

		}
		$songMax=$i;
	}
	
