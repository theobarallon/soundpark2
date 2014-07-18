window.onload=function(){
	g = new glider();
};



var glider = function(){
	var self=this;

	this.appear= function()
	{
		document.getElementById('buttons_area').style.margin="1% 0 0 0";	
		document.getElementById('share_link').style.display="block";
			
	}
	this.disappear = function()
	{
		document.getElementById('buttons_area').style.margin="3% 0 0 0";	
		document.getElementById('share_link').style.display="none";
	}

}
