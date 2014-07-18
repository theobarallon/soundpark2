

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
			include_once('../model/get_track_table.php');
			include_once('../control/display_track_table.php');
			}
			?>
		</header>
		
		<form accept-charset="UTF-8" action="http://localhost:8888/soundpark2/control/get_track_info.php" class="new_song" id="new_song" method="post">
			 <span>URL : </span><input autofocus="autofocus" id="song_url" name="song_url" type="url" />
		      <label for="playlist">Dans quelle playlist ?</label>
		       <select name="playlist" id="playlist">
		           <option value="1">Playlist du 23 au 30 juin</option>
		           <option value="2">Playlist du 30 juin au 6 juillet</option>
		           <option value="3">Playlist du 7 au 13 juillet</option>
		           <option value="4">Playlist du 14 au 20 juillet</option>
		           <option value="5">Playlist du 21 au 27 juillet</option>
		           <option value="6">Playlist du 28 juillet au 3 aout</option>
		           <option value="7">Playlist du 4 au 10 aout</option>
		           <option value="8">Playlist du 11 au 17 aout</option>
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

		<footer>
			
		</footer>		
</body>
</html>