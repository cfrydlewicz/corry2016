/* Custom JS for Corry2015 */
$(document).ready( function() {

	// Wireframe Mode toggle
	$('.wireframe-mode-toggle').click(function(){
		$('body').toggleClass("wireframe-mode-on");
	});

	// search bar
	$('.search-container').click(function(){
		if ( $(this).hassClass("closed") ) {
			$(this).removeClass('closed');
			$(this).addClass('open');
			$(this).animate({
				width: ["160px", "swing"]
			}, 200, function(){
				// done!
			});
			$(this).children('form').children('div').children('.search-field').animate({
				width: ["120px", "swing"],
				padding: ["0px 10px", "swing"]
			}, 200, function(){
				// done!
			});
			$(this).children('form').children('div').children('.search-submit').animate({
				width: ["30px", "swing"],
				borderLeft: ["1px", "swing"]
			}, 200, function(){
				// done!
			});
			$('.search-field').focus();
		} else {


		$(this).removeClass('open');
		$(this).addClass('closed');
		$(this).animate({
			width: ["0px", "swing"]
		}, 200, function(){
			// done!
		});
		$(this).children('form').children('div').children('.search-field').animate({
			width: ["00px", "swing"],
			padding: ["0px 10px", "swing"]
		}, 200, function(){
			// done!
		});
		$(this).children('form').children('div').children('.search-submit').animate({
			width: ["0px", "swing"],
			borderLeft: ["0px", "swing"]
		}, 200, function(){
			// done!
		});


		}
	});

	// Nav expanders
	$('.nav-button-expand-toggle').click(function(){
		$(this).parent().toggleClass('expanded');
		$(this).siblings('.nav-button-subcategories').slideToggle('fast');
	});

	// smooth scrolling for anchor links
	// https://css-tricks.com/snippets/jquery/smooth-scrolling/
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 600);
					return false;
				}
			}
		});
	});
	 
	// use the first element that is "scrollable"
	function scrollableElement(els) {
		for (var i = 0, argLength = arguments.length; i <argLength; i++) {
			var el = arguments[i],
					$scrollElement = $(el);
			if ($scrollElement.scrollTop()> 0) {
				return el;
			} else {
				$scrollElement.scrollTop(1);
				var isScrollable = $scrollElement.scrollTop()> 0;
				$scrollElement.scrollTop(0);
				if (isScrollable) {
					return el;
				}
			}
		}
		return [];
	}

	// blockquote cite tags subbed in for <del> tags
	$('blockquote p del').each(function(){
		$(this).parent('p').addClass("cite");
		$(this).replaceWith(function(){
			return $("<cite />", {html: $(this).html()});
		});
	});

});