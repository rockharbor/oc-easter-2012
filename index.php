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
		<link rel="stylesheet" href="css/basic-animations.css" />
		<link rel="stylesheet" href="css/fonts.css" />
		<link rel="stylesheet" href="css/styles.css" />
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
		<div id="hint">I want to take you on a journey. Click on the colors to advance.</div>
		<div id="wrapper">
			<section id="whathappens" class="darktext step" data-background-opacity="1" data-next-delay="12000">
				<p>What happens when things don&apos;t turn out as we hoped?</p>
				<p data-jmpress="drive-right after 4s step">When the job we thought would bring us life instead brings anxiety?</p>
				<p data-jmpress="drive-right after 4s prev">When the relationship we expected to fulfill us instead brings fear?</p>
				<p data-jmpress="drive-right after 4s prev">When the future that once looked so clear instead brings rejection<a href="#" class="next blue" onclick="$('#hint').slideUp()">?</a></p>
			</section>
			<section class="step" data-x="1000" data-background-opacity="40">
				<p>Each disappointment robs our joy.</p>
				<p>Until one day we turn around and realize...</p>
			</section>
			<section class="step" data-x="1000" data-z="-100" data-y="500" data-rotate-x="90" data-background-opacity="60">
				<p>Life has become increasingly grim.</p>
			</section>
			<section class="step" data-x="1000" data-z="-100" data-y="2000" data-background-opacity="80">
				<p>Not knowing how to respond, we often fall into the trap of piling chains upon chains.</p>
			</section>
			<section class="step" data-x="2000" data-z="-100" data-y="2000" data-template="chains" data-background-opacity="80">
				<p>But we only add to the gloom when we reach for things that could never set us free.</p>
				<p class="step" data-background-opacity="84">Escapism</p>
				<p class="step" data-background-opacity="88">Busyness</p>
				<p class="step" data-background-opacity="92">Isolation</p>
				<p class="step" data-background-opacity="96">Apathy</p>
			</section>
			<section class="step" data-x="2000" data-z="-1500" data-y="2000" data-rotate-z="180">
				<p>Will we always live with the chains?</p>
			</section>
			<section class="step" data-x="1000" data-z="-1500" data-y="2000" data-rotate-z="180">
				<p>Or can tomorrow&apos;s dawn really bring...</p>
				<p>A different day?</p>
				<p>A different us?</p>
			</section>
			<section class="step" data-z="3000" data-rotate-z="180" data-template="world">
				<p>Centuries ago, Jesus came into this world.</p>
				<p class="step">To restore hope.</p>
				<p class="step">To renew life.</p>
				<p class="step">So that we could know God.</p>
			</section>
			<section class="step" data-z="5000" data-rotate-z="180">
				<p>As we discover this Jesus, everything changes.</p>
			</section>
			<section class="step" data-z="6000" data-rotate-z="180" data-pre-enter-trigger="setupShatter" data-enter-trigger="shatter" data-exit-trigger="putBackTogether">
				<p>We are free.</p>
			</section>
			<section class="light step" data-z="3000" data-y="-2000">
				<p>Free from the chains that bound us.</p>
			</section>
			<section class="light step" data-x="3000" data-y="-4000">
				<p>But more than that, free to grab hold of an entirely different life.</p>
			</section>
			<section class="light step" data-x="3000" data-y="-4000" data-z="3000">
				<p>Because Jesus didn&apos;t come just to remove our chains.
				He came to replace them entirely.
				He came so that we could have life and have it to the full.</p>
			</section>
			<section class="light step" data-x="3000" data-y="-4000" data-z="5000" data-enter-trigger="startCycle" data-exit-trigger="endCycle">
				<p>How we view</p>
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
			<section class="light step" data-z="10000">
				<p>Everything is new.</p>
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
