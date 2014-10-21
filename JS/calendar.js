// JavaScript Document
$(document).ready(function(e) {
	$(".event-info").hide();
	
$(".event").on('mouseenter', function(){
	$(this).children().fadeIn(500, 'linear');
	$(this).children(".event-name").css("-webkit-transform", "translateX(250px)");
	$(".event").not(this).css("opacity", ".5");
	//$(".event-name").next("span").hide();
	
	
});
$(".event").on('mouseleave', function(){
	$(this).children().not(".event-name").fadeOut(500, 'linear');
	$(this).children(".event-name").css("-webkit-transform", "translateX(0)");
	$(".event").not(this).css("opacity", '1');
});
});