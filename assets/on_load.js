window.onload=function(){
	g = new glider();
	displayUserPastLikes();
	displayUserPastDislikes();
	mixpanel.track("Page view", {fullUrl: window.location.href});
};