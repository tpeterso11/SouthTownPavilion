// JavaScript Document
$(document).ready(function(e) {
	var apikey = 'a849ef2711893821f90d4dced5e9a0d3';
    var userid = '127040723@N04';
    var url = 'https://api.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key=' + apikey + '&user_id='+userid+'&format=json&nojsoncallback=1';
	
	
	$("#flickr").hide();
	$("#show-gal").on('click', function(){
		$("#flickr").slideToggle();
			});
			
			
			
	$.getJSON(url,

    function (data) {
        $.each(data.photos.photo, function (i, item) {
            var purl = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_m.jpg';
            var pid = item.id;
            var container = '<li class="gallery-img"><img class="span4" alt="' + item.title + '" src="' + purl + '"/> </li>';
            $(container).appendTo('#flickr');
			$(".span4").on('mouseenter', function(){
                $(this).css("-webkit-transform", "scale(1.2,1.2)");
			});
			$(".span4").on('mouseleave', function(){
				$(this).css({"-webkit-transform":""});
			});
			
			$(".gallery-img").on('click', function(){
				var clicked = $(this);
				var nextimg = $(this).next(".span4");
				$("#next").on('click', function(){
						$(clicked).fadeOut(800, 'linear');
						$("#flickr").next("li").siblings(".span4").appendTo("#show");
						//$(nextimg).fadeIn(800, 'linear');
						
					});
				$(clicked).fadeOut(500, 'linear');
				
				setTimeout(function(){
				$(clicked).appendTo("#show");
				$("#overlay").fadeIn(500, 'linear');
				}, 800);
				
				setTimeout(function(){
				$(clicked).show();
				$(clicked).children(".span4").css("position", "absolute");
				$(clicked).children(".span4").css("z-index", "100");
				$(clicked).children(".span4").css("height", "400");
				$(clicked).children(".span4").css("width", "400");
				$(clicked).children(".span4").css("border", "solid thick #FFF");
				}, 1000);
				
				$("#overlay").on('click', function(){
					$(clicked).fadeOut(500, 'linear');
					$("#next").fadeOut(800, 'linear');
					$("#overlay").fadeOut(800, 'linear');
					
					setTimeout(function(){
					$(clicked).appendTo("#flickr");
					$(clicked).fadeIn(500, 'linear');
					$(clicked).children(".span4").css({"position":""});
					$(clicked).children(".span4").css({"z-index":""});
					$(clicked).children(".span4").css({"height":""});
					$(clicked).children(".span4").css({"width":""});
					$(clicked).children(".span4").css({"border":""});
					}, 800);
				});
			});
        });
    });
});