<?php 

	include_once("../model/connect_sql.php");
	include_once("../model/get_track_list.php");
	$currentPosition = 1;
	if(isset($_GET['trackId']))
	{
		foreach($trackIds as $i=>$element)
		{
			if($_GET['trackId'] == $element)
			{
				$currentPosition = ($i+1);
			}

		}
	}
	//echo($currentPosition . ' / ' . $songMax);
	echo($currentPosition);