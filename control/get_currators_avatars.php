<?php
include_once('../model/connect_sql.php');
$req = $bdd->query('SELECT distinct currator.pseudo, currator.avatar_url, currator.link FROM song, playlist, currator WHERE song.ID_currator=currator.ID AND song.ID_playlist=playlist.ID AND playlist.date_end >= NOW() AND playlist.date_start <= NOW()');
$i = 1;
while($songBoxes = $req->fetch())
{
	?>
		><a href="<?php echo($songBoxes[2]);?>"><img src="<?php echo($songBoxes[1]);?>" class="currator_avatar" id="currator_avatar<?php echo($i);?>"></img></a
	<?php 
	$i++;
};

?>