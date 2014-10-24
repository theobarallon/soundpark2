<?php 
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <html>
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/landing.css" media="all" rel="stylesheet" />
     <meta property="og:site_name" content="Soundpark.fm"/>
    <meta property="og:description" content=" Je viens d’écouter la playlist de Soundpark.fm sélectionnée par la crème de la crème. Tu devrais écouter aussi." />
    <meta property="og:image"
content="http://soundpark.fm/assets/pictures/avatar_disco.png" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
 
<body>
	<div class="container">
		<h1>Soundpark.<span style="color: #660066">fm</span></h1>
		<h2>Toutes les semaines, le lundi, à 9h, <span style="color: #660066">le meilleur </span>de la musique sélectionné par la crème de la crème au chaud dans votre boite mail.</h2>

		<div id="email_form">
		  	<form accept-charset="UTF-8" action="http://soundpark.fm/control/register.php" class="new_user" id="new_user" method="post">
				<input autofocus="autofocus" id="user_email" name="user_email" placeholder="Email" type="email" /> 
				<input name="commit" type="submit" value="Go" />
				<div class="clearfix"></div>
			</form>
		</div>
		<?php 
			if(isset($_GET['invalidEmail']))
			{
				echo '<h3> Invalid email bro. </h3>';
			}
		
			else if(isset($_GET['alreadyExists']))
			{
				echo "<h3> Already part of the crew bro, don't tell me you forgot it ? </h3>";
			}
			else 
			{
				echo"<h3> C’est gratos.</h3>";
			}
		?>
		
	</div>
		
		
</body>
</html>
</html>