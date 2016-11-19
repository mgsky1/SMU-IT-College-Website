// JavaScript Document
$(document).ready(function(){ $('#slider6').bxSlider({ mode:'vertical',autoHover:true,auto:true,pager: true,pause: 5000,controls:false});});

$(document).ready(function(){
	
	$(".navbg").capacityFixed();
	
	$("#navul > li").not(".navhome").hover(function(){
		$(this).addClass("navmoon");
	},function(){
		$(this).removeClass("navmoon");
	});
	
});