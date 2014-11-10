<?php

require '../PHPmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.yahoo.com';  				// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $_GET['userEmail'];                 // SMTP username
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
    <link href='http://soundpark.fm/assets/fromshare.css' media='all' rel='stylesheet' />
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
 </head>
<div id='containter' style='text-align: center;'><h1 style='font-size: 4em;'>Soundpark.fm</h1></br>
<p style='font-size 1.2em; font-family: 'open sans';'>Bienvenue à la maison,</br></br>Merci beaucoup pour ton inscription, on est ravi de te savoir parmi nous et on espère sincèrement que tu ne regretteras pas ton clic quand tu recevras 50 mails de nos partenaires commerciaux… </br></br>Ton temps d’attention est limité donc on va la faire courte : </br></br></p>

<ul style='font-size 1.2em; font-family: 'open sans';'>
	<li>Tu reçois <b>la playlist</b> dans un joli mail le lundi matin à 10h. <b>SEUL</b> le lien présent dans ce mail te permet d’y accéder.</li> 

<li>Sur <a href='http://soundpark.fm'>la maison</a> il n’y a que les 3 morceaux que la communauté dont vous faites maintenant partie ont le plus likés.</li></ul></br>

<p style='font-size 1.2em; font-family: 'open sans';'>Dernière chose, si tu veux devenir contributeur, <a href='mailto:contact@soundpark.fm'>écris-nous</a>. On n'a rien d’autre à t’offrir que du sang, du labeur, des larmes et de la sueur… Et une bonne bière à l’occasion !</br></br>

A lundi pour ta première fois, </br></br>

Thomas & Arthur </br></br>

PS : Evidemment, tu ne recevras pas de mails de nos partenaires commerciaux puisque personne ne veut bosser avec nous ! ☺ On a juste un humour hyper lourd mais tu t’y feras. D’ailleurs, si tu as des blagues à nous soumettre fais-nous rire ! On partagera les meilleurs, c’est promis ! </p></div>";


$mail->AltBody = "Soundpark.fm,


Bienvenue à la maison, 

Merci beaucoup pour ton inscription, on est ravi de te savoir parmi nous et on espère sincèrement que tu ne regretteras pas ton clic quand tu recevras 50 mails de nos partenaires commerciaux… 

Ton temps d’attention est limité donc on va la faire courte : 

-Tu reçois la playlist dans un joli mail le lundi matin à 10h. SEUL le lien présent dans ce mail te permet d’y accéder. 

- Sur la maison : http://soundpark.fm, il n’y a que les 3 morceaux que la communauté dont vous faites maintenant partie ont le plus likés. 

Dernière chose, si tu veux devenir contributeur, écris-nous à contact@soundpark.fm. On n'a rien d’autre à t’offrir que du sang, du labeur, des larmes et de la sueur… Et une bonne bière à l’occasion ! 

A lundi pour ta première fois, 

Thomas & Arthur 

PS : Evidemment, tu ne recevras pas de mails de nos partenaires commerciaux puisque personne ne veut bosser avec nous ! ☺ On a juste un humour hyper lourd mais tu t’y feras. D’ailleurs, si tu as des blagues à nous soumettre fais-nous rire ! On partagera les meilleurs, c’est promis ! 
";
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>