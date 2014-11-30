<?php
include_once('../model/get_song_boxes.php');

$i = 1;
while($songBoxes = $req->fetch())
{
	
	?>
	<div id="sound_box<?php echo($i);?>" class="sound_box"
		><div class="socialIcons"
			><a href="http://www.facebook.com/sharer.php?u=http://soundpark.fm/view/fromshare.php?trackId=<?php echo $songBoxes[5];?>"><div  class="socialIcon" id="socialIconFb"></div></a
			><a href="http://twitter.com/share?url=http://soundpark.fm/view/fromshare.php?trackId=<?php echo $songBoxes[5];?>&text=Toutes%20les%20semaines,%20le%20meilleur%20de%20la%20musique%20sélectionné%20par%20la%20crème%20de%20la%20crème,%20au%20chaud%20dans%20ta%20boîte%20mail"><div  class="socialIcon" id="socialIconTwitter"></div></a
			><a href="mailto:?subject=petite découverte musicale&amp;body=Jette donc une oreille à ça : http://soundpark.fm/view/fromshare.php?trackId=<?php echo $songBoxes[5];?>"><div  class="socialIcon" id="socialIconEmail"></div></a
			><a href="<?php echo $songBoxes[6];?>"><div class="socialIcon" id="socialIconSoundcloud"></div></a
		></div
		><img src="<?php echo($songBoxes[0]);?>" class="sound_cover" id="sound_cover<?php echo($i);?>"></img	
		><!--<img src="../assets/pictures/soundcloudLogoWhite.png" class="soundcloudLogo" id="soundcloudLogo<?php echo($i);?>"></img-->
		<div class="sound_informations", id="sound_informations<?php echo($i);?>"
			><h3> Artiste : <?php echo($songBoxes[1]);?> </br></h3
			><h3> Titre : <?php echo($songBoxes[2]);?> </br></h3
			><h3> Curator : <?php echo($songBoxes[4]);?> </br></h3
		></div
	></div>
	<?php 
	$i++;
};

?>