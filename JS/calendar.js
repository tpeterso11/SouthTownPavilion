// JavaScript Document
$(document).ready(function(e) {
	$(".event-info").hide();
	
$(".event").on('click', function(){
	$(this).css("height", "400");
	$(this).children().fadeIn(1000, 'linear');
});
$(".event").on('dblclick', function(){
	$(this).children().not('.event-name').not('.date').fadeOut(500, 'linear');
	$(this).css("height", "100");
});
});