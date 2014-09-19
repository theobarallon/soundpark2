<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <script type="text/javascript" src="../assets/jquery-1.3.2.min.js"></script>
    <script src="http://connect.soundcloud.com/sdk.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 </head>
 
	<body>
		<header>
		<?php 
			if(isset($_GET['addTrack']) AND isset($_GET['idPlaylist']))
			{
				?> <h1> Son bien ajouté ! </h1></br>

			<?php

			}
			?>
		</header>
		
		<form accept-charset="UTF-8" action="http://soundpark.fm/control/get_track_info.php" class="new_song" id="new_song" method="post">
			 <span>URL : </span><input autofocus="autofocus" id="song_url" name="song_url" type="url" />
		      <label for="playlist">Dans quelle playlist ?</label>
		       <select name="playlist" id="playlist">
		           <option value="11">Playlist du 15 au 21 septembre</option>
		           <option value="12">Playlist du 22 au 28 septembre</option>
		           <option value="13">Playlist du 29 septembre au 5 octobre</option>
		           <option value="14">Playlist du 6 au 12 octobre</option>
		       </select>
		       <?php 
		      	include_once('../model/get_currators.php');
		       	echo'<label for="idCurrator">Quel influenceur ?</label>';
		       	echo'<select name="idCurrator" id="idCurrator">';
				$j = 0;

				while($j<$i)
				{
					?>
					<option value="<?php echo $idCurrator[$j]; ?>"><?php echo $pseudoCurrator[$j]; ?></option>
					<?php
					$j++;
				}
				?>
		       </select>

			<input name="commit" type="submit" value="Go" />
		</form>

		<div id="songInfo">
		</div>

		<div id="track_list">

			<h2> Playlist de la semaine courante : </h2>
			
			<?php include_once('../control/display_complete_track_list.php'); ?>

		</div>

		<footer>
			
		</footer>		
</body>
</html>