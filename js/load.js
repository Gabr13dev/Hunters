$(document).ready( function(){
	imgLoad = ['img/icons/gm2.svg','img/icons/gm3.png','img/icons/gm-xbox.png','img/icons/gm4.svg','img/icons/gm5.svg','img/icons/gm-ps.png'];
	var j = 0;
	setInterval(function(){
		if(j == imgLoad.length){j = 0;};
		$("#img_load").attr("src",imgLoad[j]);
		j++;
	}, 800);

})