
$(document).ready(function(){
	s = new slider("#galerie");
});



var slider = function(id){
	var self=this;
	this.div = $(id);
	this.slider = this.div.find(".slider");
	this.lengthCach = this.div.width();
	this.largeur=0;
	this.div.find("img").each(function(){
		self.largeur+= ($(this).width());
		self.largeur+=parseInt($(this).css("margin-left"));
		self.largeur+=parseInt($(this).css("margin-right"));
	});
	//alert(this.largeur);
	this.prec = this.div.find('.previous');
	this.suiv = this.div.find('.next');
	//alert(this.suiv.html());
	this.saut=((this.largeur/5)*2);
	this.steps = Math.ceil(this.largeur/this.saut);
	//alert(this.saut);
	//alert(this.steps);
	this.courant = 0;
	this.prec.hide();
	if(this.largeur<this.lengthCach)
	{
		this.suiv.hide();
	}

	this.slideRight = function(){
			if(self.courant<(self.steps-1)){
			self.courant++;
			self.slider.animate({
				left:-self.courant*self.saut
			},400);
			if(self.courant==(self.steps-1))
			{
				self.suiv.fadeOut();
			}
			self.prec.fadeIn();
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
			}
			if(self.courant==0)
			{
				self.prec.fadeOut();
			}
		}
		else
		{
			//alert("fini");
		}
	}

}



function slideItLeft()
{
	s.slideLeft();
}

function slideItRight()
{
	s.slideRight();
}





