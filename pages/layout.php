<?php
if (!isset($showLogo)) {
	$showLogo = true;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>OC Easter</title>
		<meta charset="utf-8" />
		<meta name="title" content="OC Easter" />
		<meta name="description" content="An Easter celebration of Jesus and His freedom at the OC Fairgrounds in Costa Mesa, California." />
		<meta name="keywords" content="oc, orange county, easter, fairgrounds, francis chan, rockharbor, oc easter, pacific amphitheatre, freedom, jesus, oc fairgrounds" />
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=yes" />
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/ie.css" />
		<link rel="stylesheet" href="css/fonts.css" />
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 480px)" />
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/jquery.fitvids.js"></script>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-7415608-5']);
			_gaq.push(['_trackPageview']);

			(function() {
			 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
			$(document).mousemove(function(event) {
				var screenWidth = $(window).width();
				var screenHeight = $(window).height();
				
				var xPos = -(event.pageX - (screenWidth / 2)) / screenWidth * 100;
				var yPos = -(event.pageY - (screenHeight / 2)) / screenHeight * 100;
				
				$('.background').css({
					backgroundPosition: ((xPos/100 * 10)+50) + '% ' + ((yPos/100 * 20)-120) + 'px'
				});
				
			});
			$(document).ready(function() {
				$('#content').fitVids();
			});
		</script>
	</head>
	<body>
		<nav>
			<?php if ($showLogo): ?><img src="/img/logo.jpg" id="logo" /><?php endif; ?>
			<a href="/">Home</a>
			<a href="about">About</a>
			<a href="directions">Directions</a>
			<a href="kids">Kids</a>
			<a href="what-to-expect">What To Expect</a>
			<a href="gallery">Gallery</a>
			<a href="stories">Stories</a>
			<a href="why-we-celebrate">Why We Celebrate</a>
			<a href="church-directory">Church Directory</a>
			<a href="give">Sponsor A Seat</a>
		</nav>
		<div id="wrapper">
			<div id="content">
				<?php echo $content; ?>
			</div>
		</div>
		<div class="background shards"></div>
	</body>
</html>