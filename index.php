<?php
if (!empty($_GET['url'])) {
	$file = 'pages'.DIRECTORY_SEPARATOR.$_GET['url'].'.php';
	if (!file_exists($file)) {
		$file = 'pages'.DIRECTORY_SEPARATOR.'404.php';
	}
	ob_start();
	include $file;
	$content = ob_get_clean();
	include 'pages'.DIRECTORY_SEPARATOR.'layout.php';
	return;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>OC Easter</title>
		<meta charset="utf-8" />
		<meta name="title" content="OC Easter" />
		<meta name="description" content="An Easter celebration of Jesus and His freedom at the OC Fairgrounds in Costa Mesa, California." />
		<meta name="keywords" content="oc, orange county, easter, fairgrounds, francis chan, rockharbor, oc easter, pacific amphitheatre, freedom, jesus, oc fairgrounds" />		<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=yes" />
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/basic-animations.css" />
		<link rel="stylesheet" href="css/fonts.css" />
		<link rel="stylesheet" href="css/styles.css" />
		<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" />
		<![endif]-->
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/jmpress.all.min.js"></script>
		<script src="js/transformjs.1.0.beta.2.min.js"></script>
		<script src="js/oceaster.js"></script>
		<script src="js/templates.js"></script>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-7415608-5']);
			_gaq.push(['_trackPageview']);

			(function() {
			 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
			
			$(document).ready(function() {
				$('#wrapper').jmpress({
					keyboard: {
						use: false
					},
					hash: {
						use: false
					},
					mouse: {
						clickSelects: false
					},
					beforeChange: $.oceaster.beforeChange
				});
				$.oceaster.init();
			});
		</script>
	</head>
	<body>
		<div id="hint" class="clearfix">
			<div id="menu">
				<a href="about">About</a>
				<a href="directions">Directions</a>
				<a href="kids">Kids</a>
				<a href="what-to-expect">What To Expect</a>
				<a href="why-we-celebrate">Why We Celebrate</a>
				<a href="church-directory">Church Directory</a>
				<!--[if lte IE 10]>
				<p class="note">This site uses new technologies. For the full experience, please consider viewing it in a browser such as Chrome or Safari.</p>
				<![endif]-->
			</div>
		</div>
		<div id="wrapper">
			<section id="whathappens" class="darktext step" data-z="1000" data-background-opacity="1">
				<p>Welcome to oceaster.com. Click the <a class="next" href="#">colors</a> to continue.</p>
			</section>
			<section id="whathappens" class="darktext step" data-background-opacity="1" data-next-delay="12000">
				<p>What happens when things don&apos;t turn out as we hoped?</p>
				<p data-jmpress="drive-right after 4s step">When the job we thought would bring us life instead brings anxiety?</p>
				<p data-jmpress="drive-right after 4s prev">When the relationship we expected to fulfill us instead brings fear?</p>
				<p data-jmpress="drive-right after 4s prev">When the future that once looked so clear instead brings <a href="#" class="next blue">rejection</a>?</p>
			</section>
			<section class="shard step visible" data-x="-500" data-y="-400" data-z="-500" data-exclude="true"><img src="/img/shard1.png" /></section>
			<section class="shard step visible" data-x="800" data-y="350" data-z="-1200" data-exclude="true"><img src="/img/shard2.png" /></section>
			<section class="shard step visible" data-x="1400" data-y="-1000" data-z="-2000" data-exclude="true"><img src="/img/shard3.png" /></section>
			<section class="shard step visible" data-x="2000" data-y="0" data-z="-1000" data-exclude="true"><img src="/img/shard6.png" /></section>
			<section id="turnaround" class="step" data-x="1000" data-background-opacity="40">
				<p>Each disappointment robs our joy.</p>
				<p>Until one day we <a href="#" class="next blue">turn</a> around and realize...</p>
			</section>
			<section id="life" class="step" data-x="1000" data-z="-500" data-y="1000" data-rotate-x="90" data-background-opacity="60">
				<p class="large">Life has become increasingly <a href="#" class="next">grim</a>.</p>
			</section>
			<section id="chains" class="step" data-x="1000" data-y="2000" data-background-opacity="80" data-enter-trigger="hideShards">
				<p>Not knowing how to respond, we often <a href="#" class="next">fall</a> into the trap of piling chains upon chains.</p>
			</section>
			<section id="gloom" class="step" data-x="2000" data-y="2000" data-template="chains" data-background-opacity="80" data-pre-enter-trigger="showChains">
				<p>But we only add to the <a href="#" class="next">gloom</a> when we reach for things that could never set us free.</p>
				<p class="step large" data-background-opacity="84"><a href="#" class="next">Escapism</a></p>
				<p class="step large" data-background-opacity="88"><a href="#" class="next">Busyness</a></p>
				<p class="step large" data-background-opacity="92"><a href="#" class="next">Isolation</a></p>
				<p class="step large" data-background-opacity="96"><a href="#" class="next">Apathy</a></p>
			</section>
			<section class="chain step visible" data-x="2300" data-z="-100" data-y="2200" data-exclude="true"><img src="/img/chain3.png" /></section>
			<section class="chain step visible" data-x="1700" data-z="-200" data-y="2000" data-exclude="true"><img src="/img/chain4.png" /></section>
			<section class="chain step visible" data-x="1600" data-z="-100" data-y="1800" data-exclude="true"><img src="/img/chain3.png" /></section>
			<section class="chain step visible" data-x="2100" data-z="-150" data-y="1800" data-exclude="true"><img src="/img/chain5.png" /></section>
			<section class="chain step visible" data-x="2000" data-z="-250" data-y="2000" data-exclude="true"><img src="/img/chain2.png" /></section>
			<section class="chain step visible" data-x="2000" data-z="-250" data-y="2000" data-exclude="true"><img src="/img/chain1.png" /></section>
			<section id="live" class="step" data-x="2000" data-z="-900" data-y="2000" data-rotate-z="180" data-enter-trigger="hideChains">
				<p>Will we always <a href="#" class="next">live</a> with the chains?</p>
			</section>
			<section id="dawn" class="step" data-x="1000" data-z="-900" data-y="2000" data-rotate-z="180" data-enter-trigger="startCycle" data-exit-trigger="endCycle" data-cycle-speed="5000">
				<p>Or can tomorrow&apos;s dawn really bring...</p>
				<p style="display:inline">A different</p>
				<div class="cycle" style="display:inline-block; width: 40px; vertical-align: top;">
					<p><a href="#" class="next">day</a></p>
					<p><a href="#" class="next">us</a></p>
				</div>
				<p style="display:inline">?</p>
			</section>
			<section id="jesus" class="step" data-z="3000" data-rotate-z="180" data-enter-trigger="showWorld" data-next-delay="13000">
				<p class="large">Centuries ago, <a href="#" class="next">Jesus</a> came into this world.</p>
				<p class="world" style="position:absolute; left: 300px; top: 300px">To restore hope.</p>
				<p class="world" style="position:absolute; left: -200px; top: -300px">To renew life.</p>
				<p class="world" style="position:absolute; left: 300px; top: -200px">So that we could know God.</p>
			</section>
			<section id="everything-changes" class="step" data-z="5000" data-rotate-z="180">
				<p>As we discover this Jesus, <a href="#" class="next">everything</a> changes.</p>
			</section>
			<section id="free" class="step" data-z="5000" data-rotate-z="180" data-pre-enter-trigger="setupShatter" data-enter-trigger="shatter" data-exit-trigger="putBackTogether">
				<p class="large"><a href="#" class="next">We are free</a></p>
			</section>
			<section id="free-from-chains" class="light step" data-z="3000" data-y="-2000" data-exit-trigger="swapBackground" data-background-opacity="0">
				<p>Free from the chains that bound <a href="#" class="next blue">us</a>.</p>
			</section>
			<section id="different-life" class="light step" data-x="3000" data-y="-4000" data-background-opacity="5">
				<p>But more than that, free to <a href="#" class="next blue">grab hold</a> of an entirely different life.</p>
			</section>
			<section id="full-life" class="light step" data-x="3000" data-y="-4000" data-z="3000" data-next-delay="10000" data-background-opacity="15">
				<p>Because Jesus didn&apos;t come just to remove our chains.</p>
				<p data-jmpress="zoom after 4s step">He came to replace them entirely.</p>
				<p data-jmpress="zoom after 4s prev">He came so that we could have life and have it to the <a href="#" class="next">full</a>.</p>
			</section>
			<section id="view" class="light step" data-x="3000" data-y="-4000" data-z="5000" data-enter-trigger="startCycle" data-exit-trigger="endCycle" data-next-delay="8000" data-background-opacity="25">
				<p>How we <a href="#" class="next blue">view</a></p>
				<div class="cycle">
					<p>Ourselves</p>
					<p>Others</p>
					<p>Our future</p>
					<p>Our relationships</p>
					<p>Our marriage</p>
					<p>Our kids</p>
					<p>Our hopes</p>
					<p>Our dreams</p>
					<p>Our purpose</p>
				</div>
			</section>
			<section id="everything-is-new" class="light step" data-x="3000" data-y="-4000" data-z="6000" data-rotate-x="45" data-background-opacity="100" data-enter-trigger="endStory">
				<p class="large">Everything is new</p>
				<p data-jmpress="fade after 2s step">Easter at the OC Fairgrounds</p>
				<p data-jmpress="fade after 1s prev">with Francis Chan</p>
				<p data-jmpress="fade after 1s prev">Sunday, April 8, 9am &amp; 11:15am</p>
				<p data-jmpress="fade after 1s prev"><a href="about">Click here</a> for details.</p>
			</section>
		</div>
		<div id="shatter">
			<div style="left: 527px; top: 558px; "><img src="/img/shatter1.png"></div>
			<div style="left: 1068px; top: 865px; "><img src="/img/shatter2.png"></div>
			<div style="left: 878px; top: 1px; "><img src="/img/shatter3.png"></div>
			<div style="left: 1068px; top: 231px; "><img src="/img/shatter4.png"></div>
			<div style="left: 967px; top: 399px; "><img src="/img/shatter5.png"></div>
			<div style="left: 792px; top: 448px; "><img src="/img/shatter6.png"></div>
			<div style="left: 987px; top: 841px; "><img src="/img/shatter7.png"></div>
			<div style="left: 792px; top: 524px; "><img src="/img/shatter8.png"></div>
			<div style="left: 783px; top: 214px; "><img src="/img/shatter9.png"></div>
			<div style="left: 574px; top: 292px; "><img src="/img/shatter10.png"></div>
			<div style="left: 638px; top: 0px; "><img src="/img/shatter11.png"></div>
			<div style="left: 639px; top: 448px; "><img src="/img/shatter12.png"></div>
			<div style="left: 819px; top: 648px; "><img src="/img/shatter13.png"></div>
			<div style="left: 731px; top: 614px; "><img src="/img/shatter14.png"></div>
			<div style="left: 662px; top: 907px; "><img src="/img/shatter15.png"></div>
			<div style="left: 609px; top: 1080px; "><img src="/img/shatter16.png"></div>
			<div style="left: 240px; top: 1007px; "><img src="/img/shatter17.png"></div>
			<div style="left: 455px; top: 966px; "><img src="/img/shatter18.png"></div>
			<div style="left: 160px; top: 1024px; "><img src="/img/shatter19.png"></div>
			<div style="left: 0px; top: 954px; "><img src="/img/shatter20.png"></div>
			<div style="left: 587px; top: 677px; "><img src="/img/shatter21.png"></div>
			<div style="left: 428px; top: 763px; "><img src="/img/shatter22.png"></div>
			<div style="left: 242px; top: 849px; "><img src="/img/shatter23.png"></div>
			<div style="left: 0px; top: 753px; "><img src="/img/shatter24.png"></div>
			<div style="left: 295px; top: 666px; "><img src="/img/shatter25.png"></div>
			<div style="left: 478px; top: 677px; "><img src="/img/shatter26.png"></div>
			<div style="left: 443px; top: 398px; "><img src="/img/shatter27.png"></div>
			<div style="left: 137px; top: 386px; "><img src="/img/shatter28.png"></div>
			<div style="left: 0px; top: 596px; "><img src="/img/shatter29.png"></div>
			<div style="left: 101px; top: 578px; "><img src="/img/shatter30.png"></div>
			<div style="left: 0px; top: 412px; "><img src="/img/shatter31.png"></div>
			<div style="left: 0px; top: 124px; "><img src="/img/shatter32.png"></div>
			<div style="left: 227px; top: 234px; "><img src="/img/shatter33.png"></div>
			<div style="left: 443px; top: 133px; "><img src="/img/shatter34.png"></div>
			<div style="left: 388px; top: 0px; "><img src="/img/shatter35.png"></div>
			<div style="left: 408px; top: 0px; "><img src="/img/shatter36.png"></div>
			<div style="left: 221px; top: 0px; "><img src="/img/shatter37.png"></div>
			<div style="left: 0px; top: 0px; "><img src="/img/shatter38.png"></div>
		</div>
		<div class="light background"></div>
	</body>
</html>
