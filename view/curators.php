<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Soundpark</title>
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="../assets/curators.css" media="all" rel="stylesheet" />

	<link rel="shortcut icon" href="http://soundpark.fm/assets/pictures/favicon.ico" type="image/x-icon">
	<link rel="icon" href="http://soundpark.fm/assets/pictures/favicon.ico" type="image/x-icon">

    
    <script type="text/javascript" src="../assets/jquery.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

 <!-- start Mixpanel --><script type="text/javascript">(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");
for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="//cdn.mxpnl.com/libs/mixpanel-2.2.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
mixpanel.init("96e08627ec77b0c4f5e065ece45960fb");</script><!-- end Mixpanel -->

 </head>
 
	<body>
		<header>
			<h1><a href="http://<?php echo($_COOKIE['playlist_url']); ?>?pwd=<?php echo($_COOKIE['current_user']); ?>" id="bannerBackLink">Soundpark.<span style="color: #660066">fm</span></a></h1>
			<h2>Merci à eux : </h2>
		</header>
		
		<div class="container" id="galerie"
			><div id="left_arrow">
				<input type="button" id="left_arrow_icon" class="previous" onclick="slideItLeft()"/>
			</div
			><div id="right_arrow">
				<input type="button" id="right_arrow_icon" class="next" onclick="slideItRight()"/>
			</div
			><div id="slider" class="slider"><?php include_once('../control/get_curators_avatars.php'); ?></div>
		</div>
		
		<footer>
			<div id="buttons_area">
				<a href="http://<?php echo($_COOKIE['playlist_url']); ?>?pwd=<?php echo($_COOKIE['current_user']); ?>" id="replay"></a>
			</div>
		</footer>		
		   <script src="../assets/slider_curators.js"></script>

		   <!-- Mixpanel Logs -->
		   <script type="text/javascript">
		   		
				mixpanel.track("Page view", {fullUrl: window.location.href});
				
		   		document.getElementById('replay').addEventListener('click', function () {
					mixpanel.track("Replay Clicked");
					}, false);

		   		document.getElementById('right_arrow_icon').addEventListener('click', function () {
					mixpanel.track("Next curators Clicked");
					}, false);

				document.getElementById('left_arrow_icon').addEventListener('click', function () {
					mixpanel.track("Previous curators Clicked");
					}, false);


				mixpanel.track_links("#slider a", "Clicked on a curator link");

				mixpanel.track_links("#bannerBackLink", "Clicked on the banner backlink", {fullUrl: window.location.href});
		   </script>
</body>
</html>