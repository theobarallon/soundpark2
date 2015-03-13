<?php 

if(isset($_GET['trackId']))
{
	if(isset($_GET['invalidEmail']))
	{
		echo TXT_LANDING_EMAILPB; 
	}

	else if(isset($_GET['alreadyExists']))
	{
		echo TXT_LANDING_DOUBLESUB; 
	}
	else 
	{
		echo TXT_LANDING_CTA; 
	}
}
else
{
	if(isset($_GET['invalidEmail']))
	{
		echo TXT_LANDING_EMAILPB; 
	}

	else if(isset($_GET['alreadyExists']))
	{
		echo TXT_LANDING_DOUBLESUB; 
	}
	else 
	{
		echo TXT_LANDING_CTA;
	}

}
	