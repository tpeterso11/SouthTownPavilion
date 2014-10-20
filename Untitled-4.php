<?php $pageTitle = 'index'; ?>
<?php include ('EventPosts.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>SouthTown Pavilion: Kansas City</title>
<link href="CSS/index-style.css" rel="stylesheet">
<link href="CSS/component.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="CSS/demo.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="JS/modernizr.custom.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="../../SouthTown Pavilion/untitled folder/CSS/JS/jquery.easing.1.3.js"></script>
<script src="../../SouthTown Pavilion/untitled folder/CSS/JS/jquery.vide.js"></script>
<script src="JS/calendar.js"></script>
<script src="JS/flickr-index.js"></script>
<script>
$(document).ready(function(e) {
	$("#loading").hide();
	var init = function(){
		$("#nav-button").fadeOut(400, 'linear');
		$(".container").fadeOut(400, 'linear');
		$(".new-page").fadeOut(400, 'linear');
		
		setTimeout(function(){
		$("#navigation").slideDown(400, 'linear');
		$("#top").slideDown(400, 'linear');
		$("#bottom").slideDown(400, 'linear');
		$("#overlay").fadeIn(600, 'linear');
		$("#div-one").fadeIn(1800, 'linear');
	}, 800);
	
	
	};
	var closeinit = function(){
		$("#navigation").slideUp(400, 'linear');
		$("#top").slideUp(400, 'linear');
		$("#bottom").slideUp(400, 'linear');
		$("#overlay").fadeOut(800, 'linear');
		
		setTimeout(function(){
			$("#nav-button").fadeIn(400, 'linear');
		}, 800);
	};
	var pageinit = function(){
		$("#overlay").fadeOut(500, 'linear');
		$("#div-one").fadeOut(800, 'linear');
		
		setTimeout(function(){
			closeinit();
		}, 800);
	};
    
	$("#navigation").hide();
	$("#top").hide();
	$("#bottom").hide();
	$("#about-page").hide();
	$(".container").hide();
	$("#calendar").hide();
	$("#confirm").hide();
	$("#gallery").hide();
	$("#nav-button").on('click', function(){
		init();
	});
	$("#x-button").on('click', function(){
		closeinit();
	});
	$("#about").on('click', function(){
		pageinit();
		
		setTimeout(function(){
		$("#loading").fadeIn(2000, 'linear');
		}, 1500);
		
		setTimeout(function(){
			$("#loading").fadeOut(800, 'linear');
		}, 2000);
		
		setTimeout(function(){
			$("#about-page").fadeIn(300, 'linear');
		}, 5000);
	});
	$("#event").on('click', function(){
		pageinit();
		
		setTimeout(function(){
		$("#loading").fadeIn(2000, 'linear');
		}, 1500);
		
		setTimeout(function(){
			$("#loading").fadeOut(800, 'linear');
		}, 2000);
		
		setTimeout(function(){
			$("#calendar").fadeIn(300, 'linear');
		}, 5000);
	});
	$("#book").on('click', function(){
		pageinit();
		
		setTimeout(function(){
		$("#loading").fadeIn(2000, 'linear');
		}, 1500);
		
		setTimeout(function(){
			$("#loading").fadeOut(800, 'linear');
		}, 2000);
		
		setTimeout(function(){
			$(".container").fadeIn(300, 'linear');
		}, 5000);
	});
	$("#photos").on('click', function(){
		pageinit();
		
		setTimeout(function(){
		$("#loading").fadeIn(2000, 'linear');
		}, 1500);
		
		setTimeout(function(){
			$("#loading").fadeOut(800, 'linear');
		}, 2000);
		
		setTimeout(function(){
			$("#gallery").fadeIn(300, 'linear');
		}, 5000);
	});
	$("#submit").on('submit', function(){
		$("#confirm").show();
		
		setTimeout(function(){
			$("#loading").fadeOut(800, 'linear');
		}, 2000);
		
		setTimeout(function(){
			$("#confirm").fadeOut(800, 'linear');
		},800);
	});
});
</script>
<style>
        html, body {
            margin: 0 auto;
            width: 100%;
            height: 100%;
			position: fixed;
		}
		.fs-title{
			color: #000 !important;
		}
		.fs-title h1{
			text-decoration: underline;
			font-family: second;
		}
		.fs-field-label{
			color: #000 !important;
		}
    </style>
</head>

<body data-vide-bg="video/coke">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../libs/jquery/jquery-1.11.1.min.js"><\/script>')</script>
<script src="JS/jquery.vide.js"></script>
<div id="top">
</div>
<span id="nav-button">
<img id="nav-button-1" src="Images/single-bar.png">
<br><img id="nav-button-2" src="Images/single-bar.png">
<br><img id="nav-button-3" src="Images/single-bar.png">
</span>
<span id="confirm">
Thank You for Booking at SouthTown! We'll Contact You Shortly!
</span>
<div id="navigation">
<ul id="nav">
<li><img class="icon" id="about" src="Images/i-icon.png"></li>
<li><img class="icon" id="event" src="Images/event-icon.png"></li>
<li><img class="icon" id="photos" src="Images/camera-icon.png"></li>
<li><img class="icon" id="book" src="Images/book-icon.png"></li>
<li><img class="icon" id="contact-us" src="Images/contact.png"></li>
<li><span id="x-button"><img class="x" id="x-left" src="Images/single-bar-white.png">
<img class="x" id="x-right" src="Images/single-bar-white.png"></span></li>
</ul>
</div>
<div id="overlay"></div>
<div id="div-one">
<img id="main-logo" src="Images/logo.png">
</div>
<?php include ("loading.php"); ?>
<?php include ("about.php"); ?>
<?php include ("calendar.php"); ?>
<?php include ("contact.php"); ?>
<?php include ("gallery.php"); ?>
<div id="bottom">
</div>
<script src="JS/classie.js"></script>
		<script src="JS/selectFx.js"></script>
		<script src="JS/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
</script>
</body>
</html>