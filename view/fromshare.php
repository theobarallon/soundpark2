<?php 
	/*session_start();
	include_once('../model/connect_sql.php');*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/fromshare.css" media="all" rel="stylesheet" />
    <script src="../assets/player_fromshare.js"></script>
       <script src="http://connect.soundcloud.com/sdk.js"></script>
    <script type="text/javascript" src="../assets/jquery.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 </head>
 
	<body>
		<header>
			<h1>Soundpark.<span style="color: #660066">fm</span></h1>
			<h2>Toutes les semaines, le lundi, à 9h, <span style="color: #660066">le meilleur de la musique</span> sélectionné par <span style="color: #660066">la crème de la crème</span> au chaud <span style="color: #660066">dans votre boite mail</span>.</h2>
		</header>
		
		<div class="container"> 
			<input type="button" class="play" id="play" value="play"/>
			<?php include_once('../control/display_share_song_box.php'); ?>

			<!--
			<div id="sound_box">
				<div id="sound_cover">
				</div>
				<div id="sound_informations">
					<h3> Artiste : yourmumcoeur </br></h3>
					<h3> Titre : eargasm </br></h3>
					<h3> Style : Jazz </br></h3>
					<h3> Currator : Jauhny </br></h3>
				</div>
			</div>
			-->
		</div>
		<div class="trackId" id="trackId"><?php if(isset($_GET['trackId'])){echo($_GET['trackId']);} ?></div>		
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
<script src="../assets/player_fromshare.js"></script>
</html>