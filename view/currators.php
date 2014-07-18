<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/currators.css" media="all" rel="stylesheet" />
    <script type="text/javascript" src="../assets/jquery.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 </head>
 
	<body>
		<header>
			<h1>Soundpark.<span style="color: #660066">fm</span></h1>
			<h2>Merci à eux : </h2>
		</header>
		
		<div class="container" id="galerie"
			><div id="left_arrow">
				<input type="button" id="left_arrow_icon" class="previous" onclick="slideItLeft()"/>
			</div
			><div id="right_arrow">
				<input type="button" id="right_arrow_icon" class="next" onclick="slideItRight()"/>
			</div
			><div id="slider" class="slider"><?php include_once('../control/get_currators_avatars.php'); ?></div>
		</div>
		
		<footer>
			<div id="buttons_area">
				<a href="<?php echo($_COOKIE['playlist_url']); ?>" id="replay"></a>
			</div>
		</footer>		
		   <script src="../assets/slider_currators.js"></script>
</body>
</html>