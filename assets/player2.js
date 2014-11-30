
$(document).ready(function(){
	s = new slider("#galerie");
});



var slider = function(id){
	var self=this;
	this.div = $(id);
	this.slider = this.div.find(".slider");
	this.lengthCach = this.div.width();
	this.largeur=0;
	this.div.find("h3").each(function(){
		self.largeur+= (self.div.width())/3;
		self.largeur+=parseInt($(this).css("margin-left"));
		self.largeur+=parseInt($(this).css("margin-right"));
	});
	//alert(this.largeur);
	this.prec = this.div.find('.previous');
	this.suiv = this.div.find('.next');
	this.precParent = this.div.find('#left_arrow');
	this.suivParent = this.div.find('#right_arrow');
	//alert(this.suiv.html());
	this.saut=(this.lengthCach)+4;
	this.steps = Math.ceil(this.largeur/this.saut);
	//alert(this.steps);
	this.courant = 0;
	this.prec.hide();
	this.precParent.hide();

	this.slideRight = function(){
			if(self.courant<(self.steps-1)){
			self.courant++;
			self.slider.animate({
				left:-self.courant*self.saut
			},400);
			/*if(self.courant==(self.steps-1))
			{
				self.suiv.fadeOut();
				self.suivParent.fadeOut();
			}*/
			self.prec.fadeIn();
			self.precParent.fadeIn();
		}
	}
	this.slideLeft = function(){
		if(self.courant>0)
		{
			self.courant--;
			self.slider.animate({
				left:-self.courant*self.saut
			},400);
			/*if(self.courant==(self.steps-2))
			{
				self.suiv.fadeIn();
				self.suivParent.fadeIn();
			}*/
			if(self.courant==0)
			{
				self.prec.fadeOut();
				self.precParent.fadeOut();
			}
		}
		else
		{
			//alert("fini");
		}
	}

}





SC.initialize({

    client_id: "17f3a8c69cb36c955df82f908611e27e"
});

var onPlay = false;
var position = 0;


var trackIds = document.getElementsByClassName('trackIds');
var songTable = [];


for(var i = 0 ; i<trackIds.length ; i++)
{
	songTable[i] = trackIds[i].innerHTML;
}
//alert(songTable.length);

var currentTrack;
updateCurrentTrack(songTable[0]);
getLikeState();



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
			nextTrack();
			mixpanel.track("Automatic Next", {
				"fullUrl": window.location.href,
				"TrackId": trackId
			});
		}}, function(sound){
		
		currentTrack = sound;
		if ($('#play').val() == "pause") 
		{	
			onPlay=true;
			currentTrack.play();
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
	if(position<(songTable.length-1))
	{
		position++;
		updateCurrentTrack(songTable[position]);
		updatePlayerPosition(songTable[position]);
		s.slideRight();
		getLikeState();
		//g.disappear();
	}
	else
	{
		location.href="../view/end.php";
	}
	
}

function previousTrack()
{
	currentTrack.stop();
	onPlay=false;
	position--;
	updateCurrentTrack(songTable[position]);
	updatePlayerPosition(songTable[position]);
	s.slideLeft();
	//g.disappear();
	getLikeState();
}

function getCurrentTrackId()
{
	return songTable[position];
}


function getLikeState()
{
	xhr = new XMLHttpRequest();
	xhr2 = new XMLHttpRequest();
	var trackId = getCurrentTrackId(); // Renvoit le TrackID en lecture, fonction dans player2.js
    var currentUser = getCookie('current_user') //user.email
    xhr.open('GET', '../model/get_like_state.php?trackId='+trackId+'&currentUser='+currentUser); // On test si le son a déjà été liké par currentUser
    xhr.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur
            console.log(xhr.responseText);
            var likeStamp = document.getElementById("plus_one");
            if(xhr.responseText == 'TRUE') // Si le son est déjà liké par currentUser
            {
                console.log('coucou3');
            	likeStamp.style.background="url(http://soundpark.fm/assets/pictures/heart_like_pressed.png)";
            	likeStamp.style.backgroundSize="cover";
            	xhr2.open('GET', '../model/get_dislike_state.php?trackId='+trackId+'&currentUser='+currentUser); // On test si le son a déjà été disliké par currentUser
                xhr2.send(null)
        	}
            else // Si le son n'est pas déjà liké par currentUser
            {
                likeStamp.style.background="url(http://soundpark.fm/assets/pictures/heart_like.png)";
                likeStamp.style.backgroundSize="cover";
                console.log('youou');
                xhr2.open('GET', '../model/get_dislike_state.php?trackId='+trackId+'&currentUser='+currentUser); // On test si le son a déjà été disliké par currentUser
                xhr2.send(null)
            }
        }
    };

    xhr2.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        
        if(xhr2.readyState == 4 && xhr2.status == 200) 
        { // Si le fichier est chargé sans erreur
        	var dislikeStamp = document.getElementById("minus_one");
        	if(xhr2.responseText == 'TRUE')
        	{
	        	dislikeStamp.style.background="url(http://soundpark.fm/assets/pictures/broken_heart2_pressed.png)";
	        	dislikeStamp.style.backgroundSize="cover";
        	}
        	else
        	{		
	        	dislikeStamp.style.background="url(http://soundpark.fm/assets/pictures/broken_heart2.png)";
	        	dislikeStamp.style.backgroundSize="cover";
        	}	
        }
    };

    xhr.send(null); // La requête est prête, on envoie tout !
}




