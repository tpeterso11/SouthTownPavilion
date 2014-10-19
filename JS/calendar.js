// JavaScript Document
$(document).ready(function(e) {
	$(".event-info").hide();
	
$(".event").on('mouseenter', function(){
	$(this).css("height", "300");
	$(this).children().fadeIn(2000, 'linear');
});
$(".event").on('mouseleave', function(){
	$(this).children().not('.event-name').not('.date').hide();
	$(this).css("height", "100");
});
});