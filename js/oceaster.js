(function($) {
	
	$.oceaster = {
		
		/**
		 * Debug mode
		 *
		 * @var boolean
		 */
		_debug: true,
		
		/**
		 * Initializes bindings for jmpress' `enterStep` and `leaveStep` triggers
		 *
		 * @return void
		 */
		init: function() {
			$($.jmpress('defaults').stepSelector+'[data-enter-trigger]').each(function() {
				$(this).bind('enterStep', function(evt) {
					var el = $(this);
					var func = el.data('enter-trigger');
					window.setTimeout(function() {
						$.oceaster.trigger(func, el, evt)
					}, 1100);
				});
			});
			$($.jmpress('defaults').stepSelector+'[data-pre-enter-trigger]').each(function() {
				$(this).bind('enterStep', function(evt) {
					var el = $(this);
					var func = el.data('pre-enter-trigger');
					$.oceaster.trigger(func, el, evt)
				});
			});
			$($.jmpress('defaults').stepSelector+'[data-exit-trigger]').each(function() {
				$(this).bind('leaveStep', function(evt) {
					var el = $(this);
					var func = el.data('exit-trigger');
					window.setTimeout(function() {
						$.oceaster.trigger(func, el, evt)
					}, 1100);
				});
			});
			
			// set up 'next' links
			$('.next').click(function() {
				$('#wrapper').jmpress('next');
			})
		},
		
		/**
		 * Called before step changes
		 *
		 * @param Element el The upcoming step element
		 * @param hash evt The event data
		 * @return void
		 */
		beforeChange: function(el, evt) {
			// remove active 'next' links
			$('.next').stop().removeClass('active');
			
			// background changes
			if ($(el).hasClass('light')) {
				$('.background').removeClass('dark').addClass('light');
			} else {
				$('.background').removeClass('light').addClass('dark');
			}
			var opac = 1;
			if ($(el).data('background-opacity')) {
				opac = $(el).data('background-opacity')/100;
			}
			$('.background').stop().animate({
				opacity: opac
			}, 1000);
			
			// check for 'next' links
			var delay = 5000;
			if ($(el).data('next-delay')) {
				delay = $(el).data('next-delay');
			}
			$(el).find('.next').delay(delay).queue(function() {
				$(this).addClass('active');
			});
		},
		
		/**
		 * Cycles through words
		 *
		 * @param Element el The current step element
		 * @param hash evt The event data
		 * @return void
		 */
		startCycle: function(el, evt, child) {
			var children = $(el).children('.cycle').children();
			if (child === undefined || child == children.length) {
				child = 0;
			}
			$(el).children('.cycle').delay(1000).animate({
				scrollTop: $(children[child]).position().top
			}, 200, function() {
				if ($.oceaster.onStep(el)) {
					$.oceaster.startCycle(el, evt, child+1);
				}
			});
		},
		
		/**
		 * Ends the cycle
		 *
		 * @return void
		 */
		endCycle: function(el, evt) {
			$(el).children('.cycle').stop().animate({scrollTop: 0});
		},

		/**
		 * Sets up the shatter effect
		 *
		 * @param Element el The current step element
		 * @param hash evt The event data
		 * @return void
		 */
		setupShatter: function(el, evt) {
			$.oceaster.putBackTogether(el, evt);
			$('#shatter').show();
		},
		
		/**
		 * Shatters elements into (roughly) a million pieces, going every
		 * whichaway
		 *
		 * @param Element el The current step element
		 * @param hash evt The event data
		 * @return void
		 */
		shatter: function(el, evt) {
			$('.background').removeClass('dark');
			$(el).addClass('light');
			
			var rand = function(max, min) {
				if (!min) {
					min = 0;
				}
				return Math.floor(Math.random()*(max+min)+min);
			}
			
			$('#shatter div').each(function(index) {
				var top = $(this).css('top').slice(0, -2);
				var left = $(this).css('left').slice(0, -2);
				
				var randX, randY, randZ, rotateX, rotateY, rotateZ;
				
				var spread = 500;
				if (left < 600) {
					randX = -rand(spread);
				} else {
					randX = rand(spread);
				}
				if (top < 600) {
					randY = -rand(spread);
				} else {
					randY = -rand(spread);
				}
				randZ = Math.random() < .5 ? -rand(200) : rand(200);

				rotateX = rand(300, 50);
				rotateY = rand(300, 50);
				rotateZ = rand(300, 50);
				
				$(this).animate({
					translateX: randX,
					translateY: randY,
					translateZ: randZ,
					rotateX: rotateX*Math.PI/180,
					rotateY: rotateY*Math.PI/180,
					rotateZ: rotateZ*Math.PI/180,
					opacity: 0
				}, 800);
				
				$(this).css({
					background: 'transparent'
				});
			});
		},
		
		/**
		 * Puts humpty back together
		 *
		 * @param Element el The current step element
		 * @param hash evt The event data
		 * @return void
		 */
		putBackTogether: function(el, evt) {
			$('#shatter').hide();
			$(el).removeClass('light');
			$('.background').addClass('dark');
			$('#shatter div').each(function() {
				$(this).css({
					translateX: 0,
					translateY: 0,
					translateZ: 0,
					rotateX: 0,
					rotateY: 0,
					rotateZ: 0,
					scale: 1,
					opacity: 1,
					filter: 'none'
				})
			});
		},
		
		/**
		 * Triggers a function on the `$.oceaster` object, passing the element
		 * and the event data as arguments
		 *
		 * @return void
		 */
		trigger: function(func, el, evt) {
			if (this[func] == undefined) {
				this.log(func+' is not a function');
				return;
			}
			this[func].call(this, el, evt);
		},
		
		/**
		 * Logs a message to the console
		 * 
		 * @param string msg Log message/object
		 * @return void
		 */
		log: function(msg) {
			if (!this._debug) {
				return;
			}
			if (window.console !== undefined) {
				console.log('[oceaster] ', msg);
			}
		},
		
		/**
		 * Checks if `el` is the current active step
		 * 
		 * @return boolean
		 */
		onStep: function(el) {
			return $('#wrapper').jmpress('active').attr('id') == $(el).attr('id');
		}
		
	}
	
})(jQuery);