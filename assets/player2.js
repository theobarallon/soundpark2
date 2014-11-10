
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
		g.disappear();
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
	g.disappear();
	
}

function getCurrentTrackId()
{
	return songTable[position];
}







