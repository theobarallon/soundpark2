
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
			if(self.courant==(self.steps-1))
			{
				self.suiv.fadeOut();
				self.suivParent.fadeOut();
			}
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
			if(self.courant==(self.steps-2))
			{
				self.suiv.fadeIn();
				self.suivParent.fadeIn();
			}
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


var currentTrack;
updateCurrentTrack(songTable[0]);



$('.play').click(function() //Gestion du bouton de lecture/pause en toggle
{
	if ($('.play').val() == "play") 
	{
		$('.play').val("pause");
		
		playCurrentTrack();
		if(!onPlay)
		{
			onPlay = true;
		} 	
	}
	else {
		$('.play').val("play");
		pauseCurrentTrack();
	}
});


function updateCurrentTrack(trackId) 
{

	SC.stream("/tracks/"+trackId,{onfinish: function(){ 
		
		updateCurrentTrack(trackId);
		$('.play').val("play"); 
		}}, function(sound){
		currentTrack = sound;
		if ($('.play').val() == "pause") 
		{	
			
			onPlay=true;
			pause = true;
			currentTrack.play();

		}

	});
}

function playCurrentTrack()
{
	var wrapers = $('.cover_wrapper');
		for(var i = 0 ; i < wrapers.length ; i++)
		{
			wrapers[i].style.opacity="0.2";
		}
	if(onPlay)
	{
		currentTrack.resume();
		pause = true;
	}
	else
	{
		currentTrack.play();
		onPlay=true;
		pause = true;
	}
	
}

function pauseCurrentTrack()
{
	var wrapers = $('.cover_wrapper');
		for(var i = 0 ; i < wrapers.length ; i++)
		{
			wrapers[i].style.opacity="0.7";
		}
	currentTrack.pause();
	pause = false;
}

function nextTrack()
{
	currentTrack.stop();
	onPlay=false;

	if(position<(songTable.length-1))
	{
		position++;
		console.log(songTable[position]);
		updateCurrentTrack(songTable[position]);
		s.slideRight();

	}
	else
	{
		//location.href="../view/end.php";
	}
	
}

function previousTrack()
{
	currentTrack.stop();
	onPlay=false;
	position--;
	updateCurrentTrack(songTable[position]);
	s.slideLeft();

	
}

function getCurrentTrackId()
{
	return songTable[position];
}


var wrapers = $('.cover_wrapper');

		
			for(var i = 0 ; i < wrapers.length ; i++)
			{

				wrapers[i].addEventListener('mouseover', function(){

						this.style.opacity="0.7";

				}, false)


				wrapers[i].addEventListener('mouseout', function(){
					if(pause)
					{
						this.style.opacity="0.05";
					}

				}, false)

				
			}
		
		








