function addLike()
{
    console.log('coucou');
	var trackId = getCurrentTrackId();
     // on fait apparaitre le lien de partage
	xhr = new XMLHttpRequest();
	xhr2 = new XMLHttpRequest();
    var currentUser = getCookie('current_user');
	xhr.open('GET', '../control/display_player_position.php?trackId='+trackId);
	xhr.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur

            alert(xhr.responseText);
            //alert('coucou');
            console.log('coucou2');
            var likeStamp = document.getElementById("plus_one");
            var dislikeStamp = document.getElementById("minus_one");
            console.log(window.getComputedStyle(likeStamp, null).getPropertyValue("background"));
            // il faut que je change le test pour un test juste si le son a été liké par le user en cours. 
            if(window.getComputedStyle(likeStamp, null).getPropertyValue("background")=="url(http://localhost:8888/assets/pictures/heart_like.png)" && window.getComputedStyle(likeStamp, null).getPropertyValue("background")=="url(http://localhost:8888/assets/pictures/broken_heart2.png)")
            {
                //g.appear();
                console.log('coucou3');
            	xhr2.open('GET', '../add_like.php?trackId='+trackId+'&currentUser='+currentUser);
            	//alert('../add_like.php?trackId='+trackId+'&currentUser='+currentUser);
                xhr2.send(null);
            	likeStamp.style.background="url(http://localhost:8888/assets/http://localhost:8888/assets/pictures/heart_like_pressed.png)";
        	}
        	else if(likeStamp.style.background=="url(http://localhost:8888/assets/pictures/heart_like.png)" && dislikeStamp.style.background=="url(http://localhost:8888/assets/pictures/broken_heart2_pressed.png)")
        	{
        		dislikeStamp.style.background="url(http://localhost:8888/assets/pictures/broken_heart2.png)";
                xhr2.open('GET', '../add_like_from_dislike.php?trackId='+trackId+'&currentUser='+currentUser);
                xhr2.send(null);
        	}
            else
            {
                //g.appear();
                console.log('nul');
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
	xhr.open('GET', '../control/display_player_position.php?trackId='+trackId);
	xhr.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur

            //alert(xhr.responseText);
            var likeStamp = document.getElementById("plus_one");
            var dislikeStamp = document.getElementById("minus_one");
            //if(dislikeStamp.style.display!="block" && likeStamp.style.display!="block")
            if(dislikeStamp.style.background=="url(http://localhost:8888/assets/pictures/broken_heart2.png)" && likeStamp.style.background=="url(http://localhost:8888/assets/pictures/heart_like.png)")
            {
            	xhr2.open('GET', '../add_dislike.php?trackId='+trackId+'&currentUser='+currentUser);
            	xhr2.send(null);
            	dislikeStamp.style.background="url(http://localhost:8888/assets/pictures/broken_heart2_pressed.png)";
        	}
        	//else if(dislikeStamp.style.display!="block" && likeStamp.style.display=="block")
            else if(dislikeStamp.style.background=="url(http://localhost:8888/assets/pictures/broken_heart2.png)" && likeStamp.style.background=="url(http://localhost:8888/assets/pictures/heart_like_pressed.png)")
    		{
				likeStamp.style.background=="url(http://localhost:8888/assets/pictures/heart_like.png)";
				xhr3.open('GET', '../add_dislike_from_like.php?trackId='+trackId+'&currentUser='+currentUser);
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