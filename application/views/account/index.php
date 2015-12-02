<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style type="text/css">
		.cd-headline.rotate-1 .cd-words-wrapper {
		  display: inline-block;
		  perspective: 300px;
		}

		.cd-headline.rotate-1 b {
  opacity: 0; 
  transform-origin: 50% 100%;
  transform: rotateX(180deg);
  display: inline-block;
  position: absolute;
  left: 0;
  top: 0;
}
 
.cd-headline.rotate-1 b.is-visible {
  position: relative;
  opacity: 1;
  transform: rotateX(0deg);
}
.cd-headline.rotate-1 b {
  opacity: 0;
  transform-origin: 50% 100%;
  transform: rotateX(180deg);
  display: inline-block;
  position: absolute;
  left: 0;
  top: 0;
}
 
.cd-headline.rotate-1 b.is-visible {
  position: relative;
  opacity: 1;
  transform: rotateX(0deg);
  animation: cd-rotate-1-in 1.2s;
}
 
.cd-headline.rotate-1 b.is-hidden {
  transform: rotateX(180deg);
  animation: cd-rotate-1-out 1.2s;
}

@keyframes cd-rotate-1-in {
  0% {
    transform: rotateX(180deg);
    opacity: 0;
  }
  35% {
    transform: rotateX(120deg);
    opacity: 0;
  }
  65% {
    opacity: 0;
  }
  100% {
    transform: rotateX(360deg);
    opacity: 1;
  }
}
 
@keyframes cd-rotate-1-out {
  0% {
    transform: rotateX(0deg);
    opacity: 1;
  }
  35% {
    transform: rotateX(-40deg);
    opacity: 1;
  }
  65% {
    opacity: 0;
  }
  100% {
    transform: rotateX(180deg);
    opacity: 0;
  }
}
	</style>
</head>

<body onload="lazyload.load()" style="background-color:#263238">

<div id="data-container"></div>
		<div id="loading-div">
      <div style="position:absolute; margin:auto; top:40%; bottom:0; left:0; right:0; width:80%">
      <img src="<?php echo base_url();?>assets/pictures/komoland_white.png" style="display:block;max-width:200px;margin-left:auto; margin-right:auto; margin-bottom:20px">
			<div class="progress">
			<div class="indeterminate"></div>
    </div>
		</div>
		</div>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>	
	<script type="text/javascript">

/**
 * @author Shaumik Daityari
 * @copyright Copyright © 2013 All rights reserved.
 */

 var lazyload = lazyload || {};

 (function($, lazyload) {

 	"use strict";

 	var page = 2,
 	buttonId = "#button-more",
 	loadingId = "#loading-div",
 	container = "#data-container";

 	lazyload.load = function() {

 		var url = "<?php echo base_url();?>ajax/register_or_login/";

 		$(buttonId).hide();
 		$(loadingId).show();

 		$.ajax({
 			url: url,
 			success: function(response) {
 				if (!response || response.trim() == "NONE") {
 					$(buttonId).fadeOut();
 					$(loadingId).text("No more entries to load!");
 					return;
 				}
 				appendContests(response);
 			},
 			error: function(response) {
 				$(loadingId).text("Sorry, there was some error with the request. Please refresh the page.");
 			}
 		});
 	};

 	var appendContests = function(response) {
 		var id = $(buttonId);

 		$(buttonId).show();
 		$(loadingId).hide();

 		$(response).appendTo($(container));
 		page += 1;
 	};

 })(jQuery, lazyload);
 </script>

</body>
</html>
