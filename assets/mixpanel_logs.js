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


document.getElementById('socialIconFb').addEventListener('click', function () {
	mixpanel.track("Share song with facebook Clicked", {
		"fullUrl": window.location.href,
		"trackId": songTable[position]
		});
}, false);

document.getElementById('socialIconTwitter').addEventListener('click', function () {
	mixpanel.track("Share song with twitter Clicked", {
		"fullUrl": window.location.href,
		"trackId": songTable[position]
		});
}, false);

document.getElementById('socialIconEmail').addEventListener('click', function () {
	mixpanel.track("Share song with email Clicked", {
		"fullUrl": window.location.href,
		"trackId": songTable[position]
		});
}, false);

document.getElementById('socialIconSoundcloud').addEventListener('click', function () {
	mixpanel.track("Listen song on Soundcloud Clicked", {
		"fullUrl": window.location.href,
		"trackId": songTable[position]
		});
}, false);


document.getElementById('play').addEventListener('click', function () {
	mixpanel.track("Play/Pause Clicked", {fullUrl: window.location.href});
}, false);




