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
			else if(isset($_GET['addCurator']))
			{
				?> <h1> Curator well added ! </h1></br>

			<?php

			}
			?>
		</header>
		<h2> Add a new song to a playlist : </h2>
		<form accept-charset="UTF-8" action="http://soundpark.fm/control/get_track_info.php" class="new_song" id="new_song" method="post">
			 <span>URL : </span><input autofocus="autofocus" id="song_url" name="song_url" type="url" />
		      <label for="playlist">Dans quelle playlist ?</label>
		       <select name="playlist" id="playlist">
		           <option value="15">Playlist du 26 octobre au 02 novembre</option>
		           <option value="16">Playlist du 03 au 09 novembre</option>
		           <option value="17">Playlist du 10 au 16 novembre</option>
		           <option value="18">Playlist du 17 au 23 novembre</option>
		           <option value="19">Playlist du 24 au 30 novembre</option>
		           <option value="20">Playlist du 01 au 07 decembre</option>
		           <option value="21">Playlist du 08 au 14 decembre</option>
		           <option value="22">Playlist du 15 au 21 decembre</option>
		           <option value="23">Playlist du 22 au 28 decembre</option>
		           <option value="24">Playlist du 29 decembre au 04 janvier</option>
		       </select>
		       <?php 
		      	include_once('../model/get_curators.php');
		       	echo'<label for="idCurator">Quel influenceur ?</label>';
		       	echo'<select name="idCurator" id="idCurator">';
				$j = 0;

				while($j<$i)
				{
					?>
					<option value="<?php echo $idCurator[$j]; ?>"><?php echo $pseudoCurator[$j]; ?></option>
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

			<h3> Playlist de la semaine courante : </h3>
			
			<?php include_once('../control/display_complete_track_list.php'); ?>

		</div>
		<div id="curators_registering">

			<h2> Add a curator : </h2>
			
			<form accept-charset="UTF-8" action="http://soundpark.fm/control/add_curator.php" class="new_curator" id="new_curator" method="post" enctype="multipart/form-data">
			 <span>Name : </span><input autofocus="autofocus" id="pseudo" name="pseudo" type="text" />
		      <label for="genre">Style de prédilection ?</label>
		       <select name="genre" id="genre">
		           <option value="1">Electro</option>
		           <option value="2">Samba</option>
		           <option value="3">Musette</option>
		       </select>
		       <span>Face : </span><input id="avatar" name="avatar" type="file" />
		       <span>Website : </span><input  id="link" name="link" type="url" />
			<input name="commit" type="submit" value="Go" />
		</form>

		</div>

		<footer>
			
		</footer>		
</body>
</html>