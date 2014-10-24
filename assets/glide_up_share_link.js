var glider = function()
{
	var self=this;


	this.appear= function()
	{
		if (window.matchMedia("(min-width: 500px)").matches) {
			document.getElementById('buttons_area').style.margin="2.5% 0 0 0";	
			document.getElementById('share_link').style.display="block";
		}		
	
	}
	this.disappear = function()
	{
		if (window.matchMedia("(min-width: 500px)").matches) {
			document.getElementById('buttons_area').style.margin="4.3% 0 0 0";	
			document.getElementById('share_link').style.display="none";
		}
	}
	

}
