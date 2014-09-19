
SC.initialize({

    client_id: "17f3a8c69cb36c955df82f908611e27e"
});

var onPlay = false;
var position = 0;


var trackId = document.getElementById('trackId').innerHTML;


//alert(trackId);

var currentTrack;
updateCurrentTrack(trackId);

$('#play').click(function() //Gestion du bouton de lecture/pause en toggle
{
	if ($(this).val() == "play") 
	{
		$(this).val("pause");
		playCurrentTrack();
		if(!onPlay)
		{
			onPlay = true;
		} 
	}
	else {
		$(this).val("play");
		pauseCurrentTrack();
	}
});


function updateCurrentTrack(trackId) 
{
	SC.stream("/tracks/"+trackId,{onfinish: function(){ 
		
		updateCurrentTrack(trackId);
		$('#play').val("play"); 
		}}, function(sound){
		currentTrack = sound;
		if ($('#play').val() == "pause") 
		{	
			onPlay=true;
			currentTrack.play();
			currentTrack.pause();
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
		onPlay=true;
	}
	
}

function pauseCurrentTrack()
{
	currentTrack.pause();
}


function getCurrentTrackId()
{
	return songTable[position];
}







