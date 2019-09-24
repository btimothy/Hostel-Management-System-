jQuery(document).ready(function($) {

	if(jQuery('.equal-height .mason-item').length > 0){
		jQuery('.equal-height .mason-item').matchHeight({byRow: true}); 
	}
	$('a, i').hover(function() {
		$(this).css({
			'color': $(this).data('onhovercolor'),
			'background-color': $(this).data('onhoverbg')
		});
	}, function() {
		$(this).css({
			'color': $(this).data('onleavecolor'),
			'background-color': $(this).data('onleavebg')
		});		
	});
});

// Photo Book Gallery

function PhotoBookGallery(el){
	jQuery('.wcp-loader').show();
	if (initiated) { jQuery(el).booklet('destroy'); };

	jQuery(el).css('width', '100%');	
	jQuery(el).find('img').css('width', '100%');

	var width = jQuery(el).find('img').width();
	var height = jQuery(el).find('img').height()/2;

	var speedofturn 		= (jQuery(el).data('speed') != '') ? jQuery(el).data('speed') : '1000';
	var readingdirection 	= jQuery(el).data('direction');
	var pagepadding 		= jQuery(el).data('padding');
	var delay 				= jQuery(el).data('autodelay');
	var pagenumbers 		= (jQuery(el).data('pagenumbers') != '') ? true : false;
	var closedbook 			= (jQuery(el).data('closedbook') != '') ? true : false;
	var autoplay 			= (jQuery(el).data('autoplay') != '') ? true : false;
	var keyboardcontrols 	= (jQuery(el).data('keyboard') != '') ? true : false;
	var booktabs 			= (jQuery(el).data('tabs') != '') ? true : false;
	var bookarrows 			= (jQuery(el).data('arrows') != '') ? true : false;
	var manual 				= (jQuery(el).data('turnbyclick') != '') ? true : false;
	var manualcontrol 		= false;

	if (jQuery(el).data('turnbyclick') != '') { manualcontrol = true; manual = false; }

	jQuery(el).booklet({
        width:  width,
        height: height,
		auto: autoplay,
		arrows: bookarrows,
		tabs: booktabs,
        closed: closedbook,
        autoCenter: closedbook,
        delay: delay,
        keyboard: keyboardcontrols,
        overlays: manualcontrol,
        manual: manual,
        pageNumbers: pagenumbers,
		pagePadding: pagepadding,
		direction: readingdirection,
		speed: speedofturn,
	});

	if (jQuery(el).data('zoom') != '') {
	    setTimeout(function() {
			jQuery(el).find('img').each(function(index, el) {
				jQuery(this).closest('div').zoom({magnify: jQuery(el).data('zoomdepth')});
			});
	    }, 100);
    };

	jQuery('.wcp-loader').hide();
	initiated = true;
}
var initiated = false;
jQuery( window ).on("resize", function() {
	jQuery('.flipbook').each(function(index, el) {
		PhotoBookGallery(el);
	});
});

jQuery(window).load(function($) {
	jQuery(window).trigger('resize');
});


// Stat Counter Script

(function ($) {

    $.fn.isOnScreen = function(x, y){

        if(x == null || typeof x == 'undefined') x = 1;
        if(y == null || typeof y == 'undefined') y = 1;

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var height = this.outerHeight();
        var width = this.outerWidth();

        if(!width || !height){
            return false;
        }

        var bounds = this.offset();
        bounds.right = bounds.left + width;
        bounds.bottom = bounds.top + height;

        var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

        if(!visible){
            return false;
        }

        var deltas = {
            top : Math.min( 1, ( bounds.bottom - viewport.top ) / height),
            bottom : Math.min(1, ( viewport.bottom - bounds.top ) / height),
            left : Math.min(1, ( bounds.right - viewport.left ) / width),
            right : Math.min(1, ( viewport.right - bounds.left ) / width)
        };

        return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;

    };

})(jQuery);

jQuery(document).scroll(function(event) {

  	var hasBeenSeen = false;
	jQuery('.timer').each(function(index, el) {
		if (jQuery(el).isOnScreen()) {
			if (jQuery(this).closest('div').data('alreadystarted') != 'yes') {
				jQuery(this).countTo();
				jQuery(this).closest('div').data('alreadystarted', 'yes');
			};
		};
		
	});
});

// CountDown timer
jQuery(document).ready(function($) {
	$(function () {
		$('.countdownapply').each(function(index, el) {
			var style = $(this).data('style');
			var year = $(this).data('year');
			var month = $(this).data('month');
			var date = $(this).data('date');
			var CountDown = new Date();
			CountDown = new Date(CountDown.getFullYear() + year, month - 1, date);
			$(this).countdown({until: CountDown, format: style});
		});
	});
});