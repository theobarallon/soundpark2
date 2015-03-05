<?php

if ($_GET['lang']=='fr')  // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
{          
	include('../control/fr_lang.php');
} 

else if ($_GET['lang']=='en') // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
{      
	include('../control/en_lang.php');
}
 
 else   // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
 {                     
 	include('../control/fr_lang.php');
 }
 
 ?>