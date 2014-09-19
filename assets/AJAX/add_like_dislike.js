function addLike()
{
	var trackId = getCurrentTrackId();
     // on fait apparaitre le lien de partage
	xhr = new XMLHttpRequest();
	xhr2 = new XMLHttpRequest();
    var currentUser = getCookie('current_user');
	xhr.open('GET', 'http://soundpark.fm/control/display_player_position.php?trackId='+trackId);
	xhr.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur

            //alert(xhr.responseText);
            //alert('coucou');
            var likeStamp = document.getElementById("like_stamp_left"+xhr.responseText);
            var dislikeStamp = document.getElementById("dislike_stamp_left"+xhr.responseText);
            if(likeStamp.style.display!="block" && dislikeStamp.style.display!="block")
            {
                g.appear();
            	xhr2.open('GET', 'http://soundpark.fm/control/add_like.php?trackId='+trackId+'&currentUser='+currentUser);
            	//alert('http://soundpark.fm/control/add_like.php?trackId='+trackId+'&currentUser='+currentUser);
                xhr2.send(null);
            	likeStamp.style.display="block";
        	}
        	else if(likeStamp.style.display!="block" && dislikeStamp.style.display=="block")
        	{
        		dislikeStamp.style.display="none";
                xhr2.open('GET', 'http://soundpark.fm/control/add_like_from_dislike.php?trackId='+trackId+'&currentUser='+currentUser);
                xhr2.send(null);
        	}
            else
            {
                g.appear();
            }


        }
    };

	xhr2.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr2.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur
            //alert(xhr2.responseText);
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
    xhr3 = new XMLHttpRequest();
    var currentUser = getCookie('current_user');
	xhr.open('GET', 'http://soundpark.fm/control/display_player_position.php?trackId='+trackId);
	xhr.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur

            //alert(xhr.responseText);
            var dislikeStamp = document.getElementById("dislike_stamp_left"+xhr.responseText);
            var likeStamp = document.getElementById("like_stamp_left"+xhr.responseText);
            if(dislikeStamp.style.display!="block" && likeStamp.style.display!="block")
            {
            	xhr2.open('GET', 'http://soundpark.fm/control/add_dislike.php?trackId='+trackId+'&currentUser='+currentUser);
            	xhr2.send(null);
            	dislikeStamp.style.display="block";
        	}
        	else if(dislikeStamp.style.display!="block" && likeStamp.style.display=="block")
    		{
				likeStamp.style.display="none";
				xhr3.open('GET', 'http://soundpark.fm/control/add_dislike_from_like.php?trackId='+trackId+'&currentUser='+currentUser);
                xhr3.send(null);
    		}
        }
    };

	xhr2.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr2.readyState == 4 && xhr2.status == 200) 
        { // Si le fichier est chargé sans erreur
        	//alert(xhr2.responseText);
            nextTrack();
        }
    };

    xhr3.onreadystatechange = function() 
    { // On gère ici une requête asynchrone

        if(xhr3.readyState == 4 && xhr3.status == 200) 
        { // Si le fichier est chargé sans erreur
            //alert(xhr3.responseText);
        }
    };


    xhr.send(null); // La requête est prête, on envoie tout !

}