<section>
	<article>
		<header>
			<h1>Gallery</h1>
		</header>
		<div class="slideshow clearfix">
			<img src="/img/gallery/150x150_1.jpg" />
			<img src="/img/gallery/150x150_2.jpg" />
			<img src="/img/gallery/150x150_3.jpg" />
			<img src="/img/gallery/150x150_4.jpg" />
			<img src="/img/gallery/150x150_5.jpg" />
			<img src="/img/gallery/150x150_6.jpg" />
			<img src="/img/gallery/150x150_7.jpg" />
			<img src="/img/gallery/150x150_8.jpg" />
			<img src="/img/gallery/150x150_9.jpg" />
			<img src="/img/gallery/150x150_10.jpg" />
			<img src="/img/gallery/150x150_11.jpg" />
			<img src="/img/gallery/150x150_12.jpg" />
			<img src="/img/gallery/150x150_13.jpg" />
			<img src="/img/gallery/150x150_15.jpg" />
			<img src="/img/gallery/150x150_16.jpg" />
			<img src="/img/gallery/150x150_17.jpg" />
		</div>
		<div class="slideshow-large" style="display: none">
			<div class="slideshow-large-image">
				<div class="slideshow-popup">
					<a class="close" href="#">X</a>
					<a class="next" href="#">Next &gt;</a>
					<a class="prev" href="#">&lt; Prev</a>
				</div>
				<div class="slideshow-background"></div>
			</div>
		</div>
	</article>
</section>
<script>
	$('.slideshow-popup a.close, .slideshow-background').click(function() {
		$('.slideshow-large').fadeOut();
	});
	$('.slideshow img').click(function() {
		var src = $(this).attr('src');
		var large = src.replace('150x150', '800x800');
		$('.slideshow-popup img').remove();
		var img = new Image();
		img.src = large;
		img.onload = function() {
			$('.slideshow-large').fadeIn();
		}
		$('.slideshow-popup').append(img).data('showing', src);
	});
	$('body').keyup(function(event) {
		if (!$('.slideshow-large').is(':visible')) {
			return;
		}
		var showing = $('.slideshow-popup').data('showing');
		switch (event.which) {
			case 37:
			case 72:
				var next = $('.slideshow img[src="'+showing+'"]').prev();
				if (next.length == 0) {
					next = $('.slideshow img:last-child');
				}
			break;
			case 39:
			case 76:
				var next = $('.slideshow img[src="'+showing+'"]').next();
				if (next.length == 0) {
					next = $('.slideshow img:first-child');
				}
			break;
			case 27:
				$('.slideshow-popup a.close').click();
			break;
		}
		next.click();
	});
	$('.next').click(function() {
		var e = new $.Event('keyup', {which: 39});
		$('body').trigger(e);
	});
	$('.prev').click(function() {
		var e = new $.Event('keyup', {which: 37});
		$('body').trigger(e);
	});
</script>