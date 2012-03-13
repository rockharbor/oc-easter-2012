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
					$.oceaster.trigger(func, el, evt)
				});
			});
			$($.jmpress('defaults').stepSelector+'[data-exit-trigger]').each(function() {
				$(this).bind('leaveStep', function(evt) {
					var el = $(this);
					var func = el.data('exit-trigger');
					$.oceaster.trigger(func, el, evt)
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
		 * Triggers a function on the `$.oceaster` object, passing the element
		 * and the event data as arguments
		 *
		 * @return void
		 */
		trigger: function(func, el, evt) {
			try {
				this[func](el, evt);
			} catch (e) {
				this.log(func+' is not a function');
			}
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