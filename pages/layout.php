<!DOCTYPE html>
<html>
	<head>
		<title>OC Easter</title>
		<meta charset="utf-8" />
		<meta name="title" content="OC Easter" />
		<meta name="description" content="An Easter celebration of Jesus and His freedom at the OC Fairgrounds in Costa Mesa, California." />
		<meta name="keywords" content="oc, orange county, easter, fairgrounds, francis chan, rockharbor, oc easter, pacific amphitheatre, freedom, jesus" />
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=yes" />
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/ie.css" />
		<link rel="stylesheet" href="css/fonts.css" />
		<link rel="stylesheet" href="css/styles.css" />
		<script src="js/jquery-1.7.1.min.js"></script>
		<script>
			/*var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-7415608-5']);
			_gaq.push(['_trackPageview']);

			(function() {
			 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();*/
			$(document).mousemove(function(event) {
				var screenWidth = $(window).width();
				var screenHeight = $(window).height();
				
				var xPos = -(event.pageX - (screenWidth / 2)) / screenWidth * 100;
				var yPos = -(event.pageY - (screenHeight / 2)) / screenHeight * 100;
				
				$('.background').css({
					backgroundPosition: ((xPos/100 * 10)+50) + '% ' + ((yPos/100 * 20)-120) + 'px'
				});
				
			});
		</script>
	</head>
	<body>
		<nav>
			<a href="about">About</a>
			<a href="church-directory">Church Directory</a>
			<a href="directions">Directions</a>
		</nav>
		<div id="wrapper">
			<div id="content">
				<?php echo $content; ?>
			</div>
		</div>
		<div class="background shards"></div>
	</body>
</html>