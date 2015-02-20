
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark Curator's space</title>
    <link href="../assets/curatorDropPage.css" media="all" rel="stylesheet" />
    <link rel="shortcut icon" href="http://soundpark.fm/assets/pictures/favicon.ico" type="image/x-icon">
	<link rel="icon" href="http://soundpark.fm/assets/pictures/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="../assets/jquery-1.3.2.min.js"></script>
    <script src="http://connect.soundcloud.com/sdk.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 </head>
 
	<body>
		<header>
			<h1>SOUNDPARK.FM</h1>
			<h2>Curator’s trackdropper</h2>
		</header>
		<div id="container">
			<h3>Hi bro! Past your tune in there to propose it for the next playlist</h3>
			<img id="explainArrow" src="../assets/pictures/explain_arrow.png">
			<div id="drop_space">
				<?php
					if(isset($_GET['curatorId']))
					{
						?>
						<form accept-charset="UTF-8" action="../control/register_curator_track.php" class="new_user" id="new_user" method="post">
						<input autofocus="autofocus" placeholder="URL of your tune. Soundcloud prefered!" id="curator_track" name="curator_track"  type="url" autocorrect="off" autocapitalize="off"/>
						<input name="commit" type="submit" value="Go" />
						<input type="hidden" value="<?php echo($_GET['curatorId']) ?>" name="ID_curator">
						<input type="hidden" value="dropPage" name="source">
						</form>
						<?php
					}
				?>
				
			</div>
		</div>
		<footer>
			<?php 
				if(isset($_GET['message']))
				{
					if($_GET['message'] == "successAdd")
					{
						echo('<h2 id="message"> Track well added! Other great catches to propose :)?</h2></br>');
					}
					else if($_GET['message'] == "notWorking")
					{
						echo('<h2 id="message">Sorry mate, but this link is not working :(. Mail us at @contact@soundpark.fm!</h2></br>');
					}
					else if($_GET['message'] == "notStreamable")
					{
						echo('<h2 id="message"> Sorry mate, but this link has some souncloud copyrights that fucks us. Try another!</h2></br>');
					}
					else if($_GET['message'] == "badLink")
					{
						echo('<h2 id="message"> Sorry mate, but this link is not valid. Sure it\'s Soundcloud or youtube?</h2></br>');
					}
				}
				if(!isset($_GET['curatorId']))
				{
					echo('<h2 id="message"> Page problem man! Are you sure you are using the link we gave you?</h2></br>');
				}

			?>
		</footer>		
</body>
</html>


