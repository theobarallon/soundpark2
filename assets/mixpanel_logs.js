/* Tracking playlist main controlers */

document.getElementById('play').addEventListener('click', function () {
	mixpanel.track("Play/Pause Clicked", {fullUrl: window.location.href});
}, false);

document.getElementById('minus_one').addEventListener('click', function () {
	mixpanel.track("Dislike Clicked", {fullUrl: window.location.href});
}, false);

document.getElementById('plus_one').addEventListener('click', function () {
	mixpanel.track("Like Clicked", {fullUrl: window.location.href});
}, false);

document.getElementById('right_arrow_icon').addEventListener('click', function () {
	mixpanel.track("Next Clicked", {
		"fullUrl": window.location.href,
		"trackId": songTable[position-1]
		});
}, false);

document.getElementById('left_arrow_icon').addEventListener('click', function () {
	mixpanel.track("Previous Clicked", {
		"fullUrl": window.location.href,
		"trackId": songTable[position+1]
		});
}, false);

document.getElementById('left_arrow_icon').addEventListener('click', function () {
	mixpanel.track("Previous Clicked", {
		"fullUrl": window.location.href,
		"trackId": songTable[position+1]
		});
}, false);


/* Tracking sharing icons */


for (var i = 0 ; i < document.getElementsByClassName('socialIconFb').length; i++)
	{
		document.getElementsByClassName('socialIconFb')[i].addEventListener('click', function() 
	    { 
	    	mixpanel.track("Share song with facebook Clicked", {
			"fullUrl": window.location.href,
			"trackId": songTable[position]
			});

		}, false);
	}

for (var i = 0 ; i < document.getElementsByClassName('socialIconTwitter').length; i++)
	{
		document.getElementsByClassName('socialIconTwitter')[i].addEventListener('click', function() 
	    { 
	    	mixpanel.track("Share song with Twitter Clicked", {
			"fullUrl": window.location.href,
			"trackId": songTable[position]
			});

		}, false);
	}

for (var i = 0 ; i < document.getElementsByClassName('socialIconEmail').length; i++)
	{
		document.getElementsByClassName('socialIconEmail')[i].addEventListener('click', function() 
	    { 
	    	mixpanel.track("Share song with Email Clicked", {
			"fullUrl": window.location.href,
			"trackId": songTable[position]
			});

		}, false);
	}

for (var i = 0 ; i < document.getElementsByClassName('socialIconSoundcloud').length; i++)
	{
		document.getElementsByClassName('socialIconSoundcloud')[i].addEventListener('click', function() 
	    { 
	    	mixpanel.track("Listen song on Soundcloud Clicked", {
			"fullUrl": window.location.href,
			"trackId": songTable[position]
			});

		}, false);
	}









