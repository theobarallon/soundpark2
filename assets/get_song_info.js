SC.initialize({

    client_id: "17f3a8c69cb36c955df82f908611e27e"
});

var songUrl = "https://soundcloud.com/szmusic-edits/tom-odell-another-love";
var streamable, trackId, trackArtWork, trackArtist, trackTitle, trackGenre;


SC.get('/resolve', { url: songUrl }, function(track)
			{
				streamable = track.streamable;
				trackId = track.id;
				var str = track.artwork_url;
				trackArtWork = str.replace("large.jpg", "crop.jpg");
				str = track.title;
				var res = str.split("-");
				trackArtist = res[0];
				trackTitle =  res[1];
				trackGenre = track.genre;	
				if(streamable)
					{
						var songInfo = document.getElementById('songInfo');
						songInfo.innerHTML = "<p id=\"artist\"> Artist = " + trackArtist +"</p><p id=\"title\"> Title = " + trackTitle +"</p><img src=\""+trackArtWork+"\"id=\"artWork\">" ;
					}
			});



