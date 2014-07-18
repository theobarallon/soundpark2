<?php
include_once('connect_sql.php');
$req = $bdd->prepare('SELECT artwork_url, artist, title, genre FROM song WHERE song.trackId = ?');
$req->execute(array($_GET['trackId']));
$songBox = $req->fetch();