<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/end.css" media="all" rel="stylesheet" />
    <script src="../assets/audio_player.js"></script>
    <script type="text/javascript" src="../assets/jquery-1.3.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 </head>
 
	<body>
		
		<header>
			<h1>Soundpark.<span style="color: #660066">fm</span></h1>
		</header>
		<div class="container"> 
				<h2>A la semaine prochaine ! </br> Si t'as kiffé, n'hésite pas à partager :</h2>
				<a href="http://www.facebook.com/sharer.php?u=http://localhost:8888/soundpark2/view/fromshare.php" target="_blank"><img src="../assets/pictures/fb_share_icon.png"></img></a>
				<img src="../assets/pictures/twitter_share_icon.png"> </img>
				<img src="../assets/pictures/pinterest_share_icon.png"> </img>
				<img src="../assets/pictures/rss_share_icon.png"> </img>
				<a href="currators.php"><h3>Et merci qui ?</h3></a>
		</div>
		<footer>
			<div id="buttons_area">
				<a href="<?php echo($_COOKIE['playlist_url']); ?>" id="replay"></a>
			</div>
		</footer>		
</body>
</html>