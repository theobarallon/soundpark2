<?php 
	session_start();
	include_once('../model/connect_sql.php');
	include_once('../model/get_password.php');
	include_once('../control/control_password.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/frommail.css" media="all" rel="stylesheet" />
    <script src="../assets/audio_player.js"></script>
    <script type="text/javascript" src="../assets/jquery-1.3.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 </head>
 
	<body>
		<header>
			<h1>Soundpark.<span style="color: #660066">fm</span></h1>
		</header>
		<div id="left_arrow">
			<div id="left_arrow_icon" class"previous">
			</div>
		</div>
		<div class="container"> 
			<div class="slider">
				<div id="sound_box">
					<div id="sound_cover">
					</div>
					<div id="sound_informations">
						<h3> Artiste : yourmumcoeur </br></h3>
						<h3> Titre : eargasm </br></h3>
						<h3> Style : Jazz </br></h3>
						<h3> Curator : Jauhny </br></h3>
					</div>
				</div>
			</div>
		</div>
		<div id="right_arrow">
			<div id="right_arrow_icon" class"previous">
			</div>
		</div>
		<footer>
			<div id="buttons_area">
				<a href="#" id="minus_one">-1</a>
				<div id="toggle" class="play"></div>
				<a href="#" id="plus_one">+1</a>
				<div id="share_link">
				</div>
			</div>
		</footer>		
</body>
</html>