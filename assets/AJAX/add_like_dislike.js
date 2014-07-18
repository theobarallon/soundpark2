function addLike()
{
	var trackId = getCurrentTrackId();
    g.appear();
	xhr = new XMLHttpRequest();
	xhr2 = new XMLHttpRequest();
	xhr.open('GET', 'http://localhost:8888/soundpark2/control/display_player_position.php?trackId='+trackId);
	xhr.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur

            //alert(xhr.responseText);
            var likeStamp = document.getElementById("like_stamp_left"+xhr.responseText);
            var dislikeStamp = document.getElementById("dislike_stamp_left"+xhr.responseText);
            if(likeStamp.style.display!="block" && dislikeStamp.style.display!="block")
            {
            	xhr2.open('GET', 'http://localhost:8888/soundpark2/control/add_like.php?trackId='+trackId);
            	xhr2.send(null);
            	likeStamp.style.display="block";
        	}
        	else if(likeStamp.style.display!="block" && dislikeStamp.style.display=="block")
        	{
        		dislikeStamp.style.display="none";
        	}


        }
    };

	xhr2.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr2.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur


        }
    };


    xhr.send(null); // La requête est prête, on envoie tout !

}

function addDislike()
{
    g.disappear();
	var trackId = getCurrentTrackId();
	xhr = new XMLHttpRequest();
	xhr2 = new XMLHttpRequest();
	xhr.open('GET', 'http://localhost:8888/soundpark2/control/display_player_position.php?trackId='+trackId);
	xhr.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur

            //alert(xhr.responseText);
            var dislikeStamp = document.getElementById("dislike_stamp_left"+xhr.responseText);
            var likeStamp = document.getElementById("like_stamp_left"+xhr.responseText);
            if(dislikeStamp.style.display!="block" && likeStamp.style.display!="block")
            {
            	xhr2.open('GET', 'http://localhost:8888/soundpark2/control/add_dislike.php?trackId='+trackId);
            	xhr2.send(null);
            	dislikeStamp.style.display="block";
        	}
        	else if(dislikeStamp.style.display!="block" && likeStamp.style.display=="block")
    		{
				likeStamp.style.display="none";
				//ajouter le script de délikage
    		}
        }
    };

	xhr2.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr2.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur
        	nextTrack();
        }
    };


    xhr.send(null); // La requête est prête, on envoie tout !

}