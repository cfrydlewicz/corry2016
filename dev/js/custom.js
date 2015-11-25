/* Custom JS for Corry2015 */
$(document).ready( function() {

	// search bar
	$('.search-container.closed').click(function(){
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
	});

	// Nav expanders
	$('.nav-button-expand-toggle').click(function(){
		$(this).parent().toggleClass('expanded');
		$(this).siblings('.nav-button-subcategories').slideToggle('fast');
	});

	// smooth scrolling for anchor links
	// stolen from http://www.learningjquery.com/2007/10/improved-animated-scrolling-script-for-same-page-links/
	function filterPath(string) {
		return string
			.replace(/^\//,'')
			.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
			.replace(/\/$/,'');
	}
	var locationPath = filterPath(location.pathname);
	var scrollElem = scrollableElement('html', 'body');

	$('a[href*=#]').each(function() {
		var thisPath = filterPath(this.pathname) || locationPath;
		if (  locationPath == thisPath
		&& (location.hostname == this.hostname || !this.hostname)
		&& this.hash.replace(/#/,'') ) {
			var $target = $(this.hash), target = this.hash;
			if (target) {
				var targetOffset = $target.offset().top;
				$(this).click(function(event) {
					event.preventDefault();
					$(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
						location.hash = target;
					});
				});
			}
		}
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

	// Wireframe Mode toggle
	$('.wireframe-mode-toggle').click(function(){
		$('body').toggleClass("wireframe-mode-on");
	});

});