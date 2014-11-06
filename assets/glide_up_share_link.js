var glider = function()
{
	var self=this;


	this.appear= function()
	{
		if (window.matchMedia("(min-height: 700px)").matches && window.matchMedia("(min-width: 1285px)").matches) {
			document.getElementById('buttons_area').style.margin="2.5% 0 0 0";	
			document.getElementById('share_link').style.display="block";
		}	
		else if (window.matchMedia("(min-width: 500px)").matches) 
		{
			document.getElementById('buttons_area').style.margin="2.3% 0 0 0";	
			document.getElementById('share_link').style.display="block";
		}	
	
	}

	this.disappear = function()
	{
		if (window.matchMedia("(min-height: 700px)").matches && window.matchMedia("(min-width: 1285px)").matches) {
			document.getElementById('buttons_area').style.margin="61px 0 0 0";	
			document.getElementById('share_link').style.display="none";
		}
		else if (window.matchMedia("(min-height: 630px)").matches) 
		{
			document.getElementById('buttons_area').style.margin="39px 0 0 0";	
			document.getElementById('share_link').style.display="none";
		}
		else if (window.matchMedia("(min-width: 500px)").matches) 
		{
			document.getElementById('buttons_area').style.margin="28px 0 0 0";	
			document.getElementById('share_link').style.display="none";
		}		
	
	}
	

}
