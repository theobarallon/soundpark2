

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/toggle.css" media="all" rel="stylesheet" />
    <script type="text/javascript" src="../assets/jquery.js"></script>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 



 </head>
 
<body>
		 <input type="button" id="play" value="play"/>
		 <script>

			$('#play').click(function() {
			   if ($(this).val() == "play") {
			      $(this).val("pause");
			      play_int();
			   }
			   else {
			      $(this).val("play");
			     play_pause();
			   }
			});

		</script>
</body>
</html>