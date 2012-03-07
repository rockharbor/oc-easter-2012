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
				$(this).bind('enterStep', function() {
					var el = $(this);
					var func = el.data('enter-trigger');
					$.oceaster.trigger(func, el)
				});
			});
			$($.jmpress('defaults').stepSelector+'[data-exit-trigger]').each(function() {
				$(this).bind('leaveStep', function() {
					var el = $(this);
					var func = el.data('exit-trigger');
					$.oceaster.trigger(func, el)
				});
			});
		},
	
		/**
		 * Triggers a function on the `$.oceaster` object
		 *
		 * @return void
		 */
		trigger: function(func, el) {
			try {
				this[func](el);
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
		}
		
	}
	
})(jQuery);