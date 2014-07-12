<?php
include_once('connect_sql.php');
$req = $bdd->query('SELECT artwork_url, artist, title, genre FROM song, playlist WHERE song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW()');

$i = 1;
while($songBoxes = $req->fetch())
{
	
	?>
	<div id="sound_box<?php echo($i);?>" class="sound_box">
		<img src="<?php echo($songBoxes[0]);?>" class="sound_cover" id="sound_cover<?php echo($i);?>"></img>
		<img src="../assets/pictures/like_stamp.png" class="like_stamp" id="like_stamp<?php echo($i);?>"></img>
		<img src="../assets/pictures/like_stamp_left.png" class="like_stamp_left" id="like_stamp_left<?php echo($i);?>"></img>
		<img src="../assets/pictures/dislike_stamp_left.png" class="dislike_stamp_left" id="dislike_stamp_left<?php echo($i);?>"></img>
		<div class="sound_informations", id="sound_informations<?php echo($i);?>">
			<h3> Artiste : <?php echo($songBoxes[1]);?> </br></h3>
			<h3> Titre : <?php echo($songBoxes[2]);?> </br></h3>
			<h3> Style : <?php echo($songBoxes[3]);?> </br></h3>
			<h3> Currator : Jauhny </br></h3>
		</div>
	</div>
	<?php 
	$i++;
};

?>