<?php 
	/*session_start();
	include_once('../model/connect_sql.php');
	include_once('../model/get_password.php');
	include_once('../control/control_password.php');*/


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/frommail4.css" media="all" rel="stylesheet" />
    <script src="http://connect.soundcloud.com/sdk.js"></script>
    <script type="text/javascript" src="../assets/jquery.js"></script>

    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 </head>
 
	<body>
		<header>
			<h1>Soundpark.<span style="color: #660066">fm</span></h1>
		</header>
		
		<div class="container" id="galerie"> 
			
			<div id="left_arrow">
				<input type="button" id="left_arrow_icon" class="previous" onclick="previousTrack()"/>
			</div>
			<div id="right_arrow">
				<input type="button" id="right_arrow_icon" class="next" onclick="nextTrack()"/>
			</div>
			<div class="slider">
			<?php include_once('../control/get_song_boxes.php'); ?>
			<?php 
				$req = $bdd->query('SELECT trackId FROM song, playlist WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW()');
				$i = 0;
				while($trackIds = $req->fetch())
				{
					?> <div class="trackIds"> <?php echo($trackIds[0]); ?> </div> <?php
				};
			?>


				
			</div>
			
		</div>
		
		<footer>
			<div id="buttons_area">
				<a href="#" id="minus_one">-1</a>
				<input type="button" class="play" id="play" value="pause"/>
				<a href="#" id="plus_one">+1</a>
				<div id="share_link">
				</div>
			</div>
		</footer>		
</body>
    <script type="text/javascript" src="../assets/player2.js"></script>
</html>