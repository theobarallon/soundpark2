<?php 
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <html>
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="assets/landing.css" media="all" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
 
<body>
	<div class="container">
		<h1>Soundpark.<span style="color: #660066">fm</span></h1>
		<h2>Toutes les semaines, le lundi, à 9h, <strong>le meilleur </strong>de la musique sélectionné par la crème de la crème au chaud dans votre boite mail.</h2>

		<div id="email_form">
		  	<form accept-charset="UTF-8" action="http://localhost:8888/soundpark2/control/register.php" class="new_user" id="new_user" method="post">
				<input autofocus="autofocus" id="user_email" name="user_email" placeholder="Email" type="email" /> 
				<input name="commit" type="submit" value="Go" />
				<div class="clearfix"></div>
			</form>
		</div>
		<?php if(isset($_GET['attempt']))
		{
			echo '<h2> </br></br> password not corresponding </h2>';
		}
		?>
		<h3> C’est gratos.</h3>
	</div>
		
		
</body>
</html>
</html>