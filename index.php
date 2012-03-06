<!DOCTYPE html>
<html>
	<head>
		<title>OC Easter</title>
		<meta charset="utf-8" />
		<meta name="title" content="OC Easter" />
		<meta name="description" content="An Easter celebration of Jesus and His freedom at the OC Fairgrounds in Costa Mesa, California." />
		<meta name="keywords" content="oc, orange county, easter, fairgrounds, francis chan, rockharbor, oc easter, pacific amphitheatre, freedom, jesus" />
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/styles.css" />
		<script src="js/jquery-1.7.1.min.js"></script>
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
				var el = $('#wrapper');
				
				var screenWidth = $(window).width();
				var screenHeight = $(window).height();
				
				var xPos = -(event.pageX - (screenWidth / 2)) / screenWidth * 100;
				var yPos = -(event.pageY - (screenHeight / 2)) / screenHeight * 100;
				
				el.css({
					backgroundPosition: (50 - xPos) + '% ' +(50 - yPos) + '%'
				});
				
			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="page">
				<header>
					<h1>Easter 2012</h1>
					<h2>Coming Soon</h2>
				</header>
			</div>
		</div>
	</body>
</html>
