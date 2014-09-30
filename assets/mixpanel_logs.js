document.getElementById('minus_one').addEventListener('click', function () {
	mixpanel.track("Dislike Clicked");
}, false);

document.getElementById('plus_one').addEventListener('click', function () {
	mixpanel.track("Like Clicked");
}, false);

document.getElementById('right_arrow_icon').addEventListener('click', function () {
	mixpanel.track("Next Clicked");
}, false);

document.getElementById('left_arrow_icon').addEventListener('click', function () {
	mixpanel.track("Previous Clicked");
}, false);

document.getElementById('play').addEventListener('click', function () {
	mixpanel.track("Play/Pause Clicked");
}, false);


