SC.initialize({

    client_id: "17f3a8c69cb36c955df82f908611e27e"
});

var onPlay = false;
var position = 0;
var songTable = new Array('/tracks/112435186', '/tracks/138084493', '/tracks/9740176');
var currentTrack;
alert('mabite');
updateCurrentTrack(songTable[0]);



$('#play').click(function() //Gestion du bouton de lecture/pause en toggle
{
	if ($(this).val() == "play") 
	{
		$(this).val("pause");
		playCurrentTrack();
		if(!onPlay)
		{
			onPlay = true;
			alert(onPlay);
		} 
	}
	else {
		$(this).val("play");
		pauseCurrentTrack();
	}
});


function updateCurrentTrack(trackId) 
{
	alert(trackId);
	SC.stream(trackId,{onfinish: function(){ nextTrack();}}, function(sound){
		currentTrack = sound;
		if ($('#play').val() == "pause") 
		{	
			onPlay=true;
			currentTrack.play();
			alert(currentTrack.artwork_url);
		}
		else
		{
			alert(onPlay);
		}
	});
}

function playCurrentTrack()
{
	if(onPlay)
	{
		currentTrack.resume();
	}
	else
	{
		currentTrack.play();
	}
	
}

function pauseCurrentTrack()
{
	currentTrack.pause();
}

function nextTrack()
{
	currentTrack.stop();
	onPlay=false;
	position++;
	updateCurrentTrack(songTable[position]);
}

function previousTrack()
{
	currentTrack.stop();
	onPlay=false;
	position--;
	updateCurrentTrack(songTable[position]);
	
}


