document.getElementById('minus_one').addEventListener('click', function () {
	mixpanel.track("Dislike Clicked", {fullUrl: window.location.href});
}, false);

document.getElementById('plus_one').addEventListener('click', function () {
	mixpanel.track("Like Clicked", {fullUrl: window.location.href});
}, false);

document.getElementById('right_arrow_icon').addEventListener('click', function () {
	mixpanel.track("Next Clicked", {fullUrl: window.location.href});
}, false);

document.getElementById('left_arrow_icon').addEventListener('click', function () {
	mixpanel.track("Previous Clicked", {fullUrl: window.location.href});
}, false);

document.getElementById('play').addEventListener('click', function () {
	mixpanel.track("Play/Pause Clicked", {fullUrl: window.location.href});
}, false);


