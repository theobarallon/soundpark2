<?php
	
	include_once("../model/get_curators_list.php");
	while($curatorsList = $req->fetch())
	{
		echo('<ul id="curatorsList">');
			echo('<li><img src="'.$curatorsList[3].'"/></li>');
			echo('<li><strong style="color: #C5CFD0;">Pseudo :</strong> '.$curatorsList[1].'  </li>');
			echo('<li><strong style="color: #C5CFD0;">Genre :</strong> '.$curatorsList[2].'  </li>');
		echo('</ul>');
	}	
					
