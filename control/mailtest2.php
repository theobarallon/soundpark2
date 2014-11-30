<?php

require '../PHPmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->CharSet = 'UTF-8';
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.yahoo.com';  				// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'arthur.rougier@yahoo.com';                 // SMTP username
$mail->Password = 'Kfht5pjj';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'contact@soundpark.fm';
$mail->FromName = 'Arthur et Thomas';
$mail->addAddress('arthur.rougier@gmail.com', 'Arthur');     // Add a recipient  
$mail->addReplyTo('contact@soundpark.fm', 'Arthur et Thomas');


$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'test';
$mail->Body    = "<head>
    <title>Soundpark</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <style>

		*{ margin:0; }

		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600);

		h1, h2, h3, h4, h5, h6 {
		  margin: 10px 0;
		  font-family: inherit;
		  font-weight: bold;
		  line-height: 30px;
		  color: inherit;
		  text-rendering: optimizelegibility; }
		  h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
		    font-weight: normal;
		    line-height: 1;
		    color: #999999; }


		select,
		textarea,
		input[type='text'],
		input[type='password'],
		input[type='datetime'],
		input[type='datetime-local'],
		input[type='date'],
		input[type='month'],
		input[type='time'],
		input[type='week'],
		input[type='number'],
		input[type='email'],
		input[type='url'],
		input[type='search'],
		input[type='tel'],
		input[type='color'],
		.uneditable-input {
		  display: inline-block;
		  height: 20px;
		  padding: 4px 6px;
		  font-size: 14px;
		  line-height: 20px;
		  color: #555555;
		  -webkit-border-radius: 4px;
		  -moz-border-radius: 4px;
		  border-radius: 4px;
		  vertical-align: middle; }

		textarea,
		input[type='text'],
		input[type='password'],
		input[type='datetime'],
		input[type='datetime-local'],
		input[type='date'],
		input[type='month'],
		input[type='time'],
		input[type='week'],
		input[type='number'],
		input[type='email'],
		input[type='url'],
		input[type='search'],
		input[type='tel'],
		input[type='color'],
		.uneditable-input {
		  background-color: white;
		  border: 1px solid white;
		  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
		  -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
		  -o-transition: border linear 0.2s, box-shadow linear 0.2s;
		  transition: border linear 0.2s, box-shadow linear 0.2s; }

		  textarea:focus,
		  input[type='text']:focus,
		  input[type='password']:focus,
		  input[type='datetime']:focus,
		  input[type='datetime-local']:focus,
		  input[type='date']:focus,
		  input[type='month']:focus,
		  input[type='time']:focus,
		  input[type='week']:focus,
		  input[type='number']:focus,
		  input[type='email']:focus,
		  input[type='url']:focus,
		  input[type='search']:focus,
		  input[type='tel']:focus,
		  input[type='color']:focus,
		  .uneditable-input:focus {
		    border-color: white;
		    outline: 0;
		    outline: thin dotted \9;
		    /* IE6-9 */
		    -webkit-box-shadow: inset 0 1px 1px white, 0 0 8px white;
		    -moz-box-shadow: inset 0 1px 1px white, 0 0 8px white;
		    box-shadow: inset 0 1px 1px white, 0 0 8px white; }
		  
		input[type='file'],
		input[type='image'],
		input[type='submit'],
		input[type='reset'],
		input[type='button'],
		input[type='radio'],
		input[type='checkbox'] {
		  width: auto; }



		.container {
		margin-right: auto;
		margin-left: auto;
		*zoom: 1; }
		.container:before, .container:after {
		display: table;
		content: '';
		line-height: 0; }
		.container:after {
		clear: both; }

		.container-fluid {
		padding-right: 20px;
		padding-left: 20px;
		*zoom: 1; }
		.container-fluid:before, .container-fluid:after {
		display: table;
		content: '';
		line-height: 0; }
		.container-fluid:after {
		clear: both; }


		#logo
		{
			width: 400px;
			margin-top: 30px;
			margin-bottom: 30px;
		}

		h1, h2, h3 {
		  font-family: 'Code';
		  text-align: center;
		  font-weight: normal; }

		#container
		{
		  margin: 15px 40px 15px 40px;
		  text-align: center;
		}

		p, ul, li
		{
			font-family: 'Open Sans';
			color: #797979;
		}

    </style>

 </head>



<div id='container'>

	<img id='logo' src='http://soundpark.fm/assets/pictures/logo.png'/></br>

	<p>Bienvenue à la maison,</br></br>Merci beaucoup pour ton inscription, on est ravi de te savoir parmi nous et on espère sincèrement que tu ne regretteras pas ton clic quand tu recevras 50 mails de nos partenaires commerciaux… </br></br>Ton temps d’attention est limité donc on va la faire courte : </br></br></p>

	<ul>
		<li>Tu reçois <b>la playlist</b> dans un joli mail le lundi matin à 10h. <b>SEUL</b> le lien présent dans ce mail te permet d’y accéder.</li> 

	<li>Sur <a href='http://soundpark.fm'>la maison</a> il n’y a que les 3 morceaux que la communauté dont vous faites maintenant partie ont le plus likés.</li></ul></br>

	<p>Dernière chose, si tu veux devenir contributeur, <a href='mailto:contact@soundpark.fm'>écris-nous</a>. On n'a rien d’autre à t’offrir que du sang, du labeur, des larmes et de la sueur… Et une bonne bière à l’occasion !</br></br>

	A lundi pour ta première fois, </br></br>

	Thomas & Arthur </br></br></p>

	<p style='font-size: 0.8em;'>PS : Evidemment, tu ne recevras pas de mails de nos partenaires commerciaux puisque personne ne veut bosser avec nous ! ☺ On a juste un humour hyper lourd mais tu t’y feras. D’ailleurs, si tu as des blagues à nous soumettre fais-nous rire ! On partagera les meilleures, c’est promis ! </p>

</div>

";


$mail->AltBody = "Soundpark.fm,


Bienvenue à la maison, 

Merci beaucoup pour ton inscription, on est ravi de te savoir parmi nous et on espère sincèrement que tu ne regretteras pas ton clic quand tu recevras 50 mails de nos partenaires commerciaux… 

Ton temps d’attention est limité donc on va la faire courte : 

-Tu reçois la playlist dans un joli mail le lundi matin à 10h. SEUL le lien présent dans ce mail te permet d’y accéder. 

- Sur la maison : http://soundpark.fm, il n’y a que les 3 morceaux que la communauté dont vous faites maintenant partie ont le plus likés. 

Dernière chose, si tu veux devenir contributeur, écris-nous à contact@soundpark.fm. On n'a rien d’autre à t’offrir que du sang, du labeur, des larmes et de la sueur… Et une bonne bière à l’occasion ! 

A lundi pour ta première fois, 

Thomas & Arthur 

PS : Evidemment, tu ne recevras pas de mails de nos partenaires commerciaux puisque personne ne veut bosser avec nous ! ☺ On a juste un humour hyper lourd mais tu t’y feras. D’ailleurs, si tu as des blagues à nous soumettre fais-nous rire ! On partagera les meilleurs, c’est promis ! </br></br></br>
";
if(!$mail->send()) {
    echo 'Message could not be sent';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>