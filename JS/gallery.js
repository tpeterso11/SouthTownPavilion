// JavaScript Document
$(document).ready(function(){
$("img").on('click', function(){
	$(this).css("height", "400");
	$("img").not(this).css("height", "100");
	$("img").not(this).css("opacity", ".4");
});
});