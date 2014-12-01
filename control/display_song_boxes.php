<?php
include_once('../model/get_song_boxes.php');

$i = 1;
while($songBoxes = $req->fetch())
{
	
	?>
	<div id="sound_box<?php echo($i);?>" class="sound_box"
		><div class="socialIcons"
			><a href="http://www.facebook.com/sharer.php?u=http://soundpark.fm/view/fromshare.php?trackId=<?php echo $songBoxes[5];?>" target="_blank"><div  class="socialIconFb" id="socialIconFb<?php echo($i);?>"></div></a
			><a href="http://twitter.com/share?url=http://soundpark.fm/view/fromshare.php?trackId=<?php echo $songBoxes[5];?>&text=j’ai%20découvert%20ce%20son%20sur%20Soundpark.fm,%20la%20newsletter%20musicale%20qui%20te%20régale%20tous%20les%20lundis.%20Inscrivez%20vous%20aussi!" target="_blank"><div  class="socialIconTwitter" id="socialIconTwitter<?php echo($i);?>"></div></a
			><a href="mailto:?subject=Ecoute ce que je viens de découvrir sur Soundpark.fm !&amp;body=je viens de découvrir ce morceau sur Soundpark.fm, la seule newsletter de découverte musicale qui arrive directement dans votre boite tous les lundis. Inscrivez-vous aussi pour vous régaler toutes les semaines : http://soundpark.fm/view/fromshare.php?trackId=<?php echo $songBoxes[5];?>"><div  class="socialIconEmail" id="socialIconEmail<?php echo($i);?>" target="_blank"></div></a
			><a href="<?php echo $songBoxes[6];?>" target="_blank"><div class="socialIconSoundcloud" id="socialIconSoundcloud<?php echo($i);?>"></div></a
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

j’ai découvert ce son sur Soundpark.fm, la newsletter musicale qui te régale tous les lundis. Inscris toi aussi!