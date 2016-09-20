/* Custom JS for Corry2015 */
$(document).ready( function() {

	// Wireframe Mode toggle
	$('.wireframe-mode-toggle').change(function(){
		$('body').toggleClass("wireframe-mode-on");
	});

	// search bar
	$('.search-container').click(function(){
		if ( $(this).hasClass("closed") ) {
			$(this).removeClass('closed').addClass('open').animate({
				width: ["100%", "swing"]
			}, 200, function(){
				// done!
			});
			$('.search-field').focus();
/* Disable toggling - reusing the search button as the submit input results in awkwardness on search results pages (where the search box defaults to open)
		} else {
			$(this).removeClass('open').addClass('closed').animate({
				width: ["40px", "swing"]
			}, 200, function(){
				// done!
			});
*/
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