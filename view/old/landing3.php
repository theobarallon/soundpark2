<?php 
	session_start();
	include_once('../model/connect_sql.php');
	setcookie('playlist_url', $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'], time() + 7*24*3600, null, null, false, true);
	setcookie('current_user', $_GET['pwd'], time() + 7*24*3600, null, null, false, false);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/landing2.css" media="all" rel="stylesheet" />

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="stylesheet" media="screen and (max-width: 1285px)" href="../assets/landing3smallRes.css" />
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="../assets/landing3.css" />
    <link rel="stylesheet" media="all and (max-width: 480px)" href="../assets/landing3.css" />


    <script src="http://connect.soundcloud.com/sdk.js"></script>
    <script type="text/javascript" src="../assets/jquery.js"></script>
    <script type="text/javascript" src="../assets/cookies.js"></script>
    <script type="text/javascript" src="../assets/AJAX/update_player_position.js"></script>
    <script type="text/javascript" src="../assets/AJAX/add_like_dislike.js"></script>
    <script type="text/javascript" src="../assets/AJAX/display_user_past_likes.js"></script>

    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <!-- start Mixpanel --><script type="text/javascript">(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");
for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="//cdn.mxpnl.com/libs/mixpanel-2.2.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
mixpanel.init("96e08627ec77b0c4f5e065ece45960fb");</script><!-- end Mixpanel -->


 </head>
 
	<body>
		<header>
			<h1>Soundpark.<span style="color: #660066">fm</span></h1>
			<h2 id="player_position"><?php include("../control/display_player_position.php"); ?></h2>
			<h2>Toutes les semaines, le lundi, à 9h, <span style="color: #660066">le meilleur de la musique</span> sélectionné par <span style="color: #660066">la crème de la crème</span> au chaud <span style="color: #660066">dans votre boite mail</span>.</h2>
			<!--<h3> <?php //echo($_COOKIE['playlist_url']); ?> </h3>-->
			<!--<h3> <?php //echo($_COOKIE['current_user']); ?> </h3>-->
		</header>
		

		
		<div class="container" id="galerie"> 
			<div id="sliderTitle">
				<div id="topNumber">
					#1
				</div>
				<div id="likeCount">
					1167 likes de la communauté
				</div>
				<div id="week">
					Semaine du 11 au 18 octobre 
				</div>
			</div>
			<div id="slider">
				<div id="left_arrow">
					<input type="button" id="left_arrow_icon" class="previous" onclick="previousTrack()"/>
				</div>
				<div id="right_arrow">
					<input type="button" id="right_arrow_icon" class="next" onclick="nextTrack()"/>
				</div>
				<div class="slider">
				<?php include_once('../control/display_landing_song_boxes.php'); ?>
				<?php 
					$req = $bdd->query('SELECT trackId FROM song, playlist WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW() LIMIT 3');
					$i = 0;
					while($trackIds = $req->fetch())
					{
						?> <div class="trackIds"><?php echo($trackIds[0]); ?></div> <?php
					};
				?>	
				</div>
			</div>

			
		</div>
		
		<footer>
			<div id="subscription_area">
				<h2>Get subscribed!</br></h2>
				<div id="saisie">
					<form accept-charset="UTF-8" action="http://soundpark.fm/control/suscribe.php" class="new_user" id="new_user" method="post">
							<input autofocus="autofocus" id="user_email" name="user_email" placeholder="Email" type="text" />
							<input name="commit" type="submit" value="Go" />
							<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</footer>		
</body>
    <script type="text/javascript" src="../assets/player_landing.js"></script>
    <script type="text/javascript" src="../assets/glide_up_share_link.js"></script>
    <script type="text/javascript" src="../assets/on_load_landing.js"></script>
</html>