<?php
	include_once("../model/connect_sql.php");
	$req = $bdd->query('UPDATE proposed_song SET treated = 1');
	header('Location: ../view/curators_songs_new.php?message=Good%20job,%20dude');