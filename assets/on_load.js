window.onload=function(){
	//g = new glider();
	displayUserPastLikes();
	displayUserPastDislikes();
	mixpanel.track("Page view", {fullUrl: window.location.href});
};

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}