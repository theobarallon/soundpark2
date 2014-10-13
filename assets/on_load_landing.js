window.onload=function(){
	mixpanel.track("Page view", {fullUrl: window.location.href});
};