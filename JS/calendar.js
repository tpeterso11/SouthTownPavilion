// JavaScript Document
$(document).ready(function(e) {
	$(".event-info").hide();
	$(".close").hide();
	
$(".event").on('mouseenter', function(){
	$(".event").not(this).css("opacity", ".5");
	//$(".event-name").next("span").hide();
});
$(".event").on('mouseleave', function(){
	$(".event").not(this).css("opacity", '1');
});
$(".event").on('click', function(){
	$(".event").not(this).hide();
	$(this).children().fadeIn(800, 'linear');
	
	setTimeout(function(){
		$(".close").fadeIn(800, 'linear');
	}, 800);
});
$(".close").on('click', function(){
	$(".event-info").fadeOut(800, 'linear');
	
	setTimeout(function(){
		$(".close").fadeOut(800, 'linear');
		$(".event").fadeIn(800, 'linear');
	},1000);
});
});