<?php
	if(isset($_GET['currentUser']))
	{
		include_once('connect_sql.php');
		$req=$bdd->prepare('SELECT trackId FROM song, soundpark2.dislike, user WHERE user.email = ? AND user.ID = soundpark2.dislike.ID_user AND soundpark2.dislike.ID_song = song.ID');
		$req->execute(array($_GET['currentUser']));
		$i = 0;
		while($rep = $req->fetch())
		{
			$userTrackIdsDislike[$i] = $rep[0];
			$i++;
		}
		foreach($userTrackIdsDislike as $value)
		{
			echo ($value.'-');
		}
	}

	