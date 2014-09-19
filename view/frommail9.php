<?php 
	session_start();
	include_once('../model/connect_sql.php');
	include_once('../model/find_user_email.php');
	include_once('../control/control_user.php');
	setcookie('playlist_url', $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'], time() + 7*24*3600, null, null, false, true);
	setcookie('current_user', $_GET['pwd'], time() + 7*24*3600, null, null, false, false);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/frommail7.css" media="all" rel="stylesheet" />
    <script src="http://connect.soundcloud.com/sdk.js"></script>
    <script type="text/javascript" src="../assets/jquery.js"></script>
    <script type="text/javascript" src="../assets/cookies.js"></script>
    <script type="text/javascript" src="../assets/AJAX/update_player_position.js"></script>
    <script type="text/javascript" src="../assets/AJAX/add_like_dislike.js"></script>
    <script type="text/javascript" src="../assets/AJAX/display_user_past_likes.js"></script>

    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 </head>
 
	<body>
		<header>
			<h1>Soundpark.<span style="color: #660066">fm</span></h1>
			<h2 id="player_position"><?php include("../control/display_player_position.php"); ?></h2>
			<!--<h3> <?php //echo($_COOKIE['playlist_url']); ?> </h3>-->
			<!--<h3> <?php //echo($_COOKIE['current_user']); ?> </h3>-->
		</header>
		
		<div class="container" id="galerie"> 
			
			<div id="left_arrow">
				<input type="button" id="left_arrow_icon" class="previous" onclick="previousTrack()"/>
			</div>
			<div id="right_arrow">
				<input type="button" id="right_arrow_icon" class="next" onclick="nextTrack()"/>
			</div>
			<div class="slider">
			<?php include_once('../control/display_song_boxes.php'); ?>
			<?php 
				$req = $bdd->query('SELECT trackId FROM song, playlist WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW()');
				$i = 0;
				while($trackIds = $req->fetch())
				{
					?> <div class="trackIds"><?php echo($trackIds[0]); ?></div> <?php
				};
			?>


				
			</div>
			
		</div>
		
		<footer>
			<div id="buttons_area">
				<input type="button" id="minus_one" value="-1" onclick="addDislike()"/>
				<input type="button" class="play" id="play" value="pause"/>
				<input type="button" id="plus_one" value="+1" onclick="addLike()"/>
				<form id="share_link">
					<span class="share_url_title"> Share that tune --> </span>
					<?php 
						//on va ici chercher le premier trackId pour initialiser le lien share
						$req = $bdd->query('SELECT trackId FROM song, playlist WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW()');
						$trackIds = $req->fetch();
					?>
					<input type="text"  id="share_url" name="share_url" value="http://soundpark.fm/view/fromshare.php?trackId=<?php echo $trackIds[0]; ?>" disabled="disabled" autofocus/>
					<span class="share_url_title"> <-- Share that tune </span>
				</form>
			</div>
		</footer>		
</body>
    <script type="text/javascript" src="../assets/player2.js"></script>
    <script type="text/javascript" src="../assets/glide_up_share_link.js"></script>
    <script type="text/javascript" src="../assets/on_load.js"></script>
</html>