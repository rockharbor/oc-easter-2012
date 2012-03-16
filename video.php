<?php

$videos = array(
	'2012-03_Easter_Story_2Lives_QR-RH_Website_Film.mp4',
	'2012-03_Easter_Story_Anorexia_QR-RH_Website_Film.mp4',
	'2012-03_Easter_Story_Biker_QR-RH_Website_Film.mp4',
	'2012-03_Easter_Story_Blonde_QR-RH_Website_Film.mp4',
	'2012-03_Easter_Story_Depression_QR-RH_Website_Film.mp4',
	'2012-03_Easter_Story_Molestation_QR-RH_Website_Film.mp4'
);

$vid = array_rand($videos);
$vid = $videos[$vid];

header('Location: http://dj543q8jb3awo.cloudfront.net/'.$vid);