<?php 
	session_start();
	require('../control/decide_lang.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <html>
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/registered.css" media="all" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
 
<body>
	<div class="container">
		<h1><a href="http://soundpark.fm">Soundpark.<span style="color: #660066">fm</span></a> </h1>
		<h2><?php echo TXT_REGISTERED_PARAGRAPH; ?></h2>

	</div>
	
	<script type="text/javascript">
		mixpanel.track("Page view", {fullUrl: window.location.href});
	</script>	
			
</body>
</html>
</html>