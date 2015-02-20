SC.initialize({

    client_id: "17f3a8c69cb36c955df82f908611e27e"
});

var onPlay = false;
var position = 0;

var trackIds = document.getElementsByClassName('trackId');
var songTable = [];


for(var i = 0 ; i<trackIds.length ; i++)
{
	songTable[i] = trackIds[i].value;
}
console.log(songTable);
//alert(songTable.length);

var currentTrack;
var onplay = 0;
//updateCurrentTrack(songTable[0]);



$('.playPauseIcon').click(function() //Gestion du bouton de lecture/pause en toggle
{
	var index = this.id.slice(-1);
	trackId = document.getElementById('trackId'+index).value;
	if (this.className === "playPauseIcon play") 
	{
			
		if(!onplay)
		{
			onplay = 1;
			playCurrentTrack(trackId);
			this.className = "playPauseIcon pause";
		}
		else
		{
			if(currentTrack.sID.indexOf(trackId) >= 0)
			{
				currentTrack.togglePause(trackId);
				this.className = "playPauseIcon pause";
			}
			else
			{
				//currentTrack.sID.substring(9).split("-")[0];
				var icons = document.getElementsByClassName('playPauseIcon');
				for(var indexbis = 0 ; indexbis < icons.length ; indexbis++)
				{
					icons[indexbis].className = "playPauseIcon play";
				}
				currentTrack.stop();
				playCurrentTrack(trackId);
				this.className = "playPauseIcon pause";
			}
		}
	}
		
	
	else {
		this.className = "playPauseIcon play";
		currentTrack.togglePause(trackId);
	}

});



function playCurrentTrack(trackId)
{

	SC.stream("/tracks/"+trackId, function(sound)
			{
	  			currentTrack = sound;
	  			currentTrack.play(trackId);
			});
}

