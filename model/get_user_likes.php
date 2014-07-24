<?php
	if(isset($_GET['currentUser']))
	{
		include_once('connect_sql.php');
		$req=$bdd->prepare('SELECT trackId FROM song, soundpark2.like, user WHERE user.email = ? AND user.ID = soundpark2.like.ID_user AND soundpark2.like.ID_song = song.ID');
		$req->execute(array($_GET['currentUser']));
		$i = 0;
		while($rep = $req->fetch())
		{
			$userTrackIdsLike[$i] = $rep[0];
			$i++;
		}
		foreach($userTrackIdsLike as $value)
		{
			echo ($value.'-');
		}
	}

	