/* Custom JS for Corry2015 */
jQuery(document).ready( function() {

  // search bar
  jQuery('.search-container.closed').click(function(){
    jQuery(this).removeClass('closed');
    jQuery(this).addClass('open');
    jQuery(this).animate({
      width: ["160px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery(this).children('form').children('div').children('.search-field').animate({
      width: ["120px", "swing"],
      padding: ["0px 10px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery(this).children('form').children('div').children('.search-submit').animate({
      width: ["30px", "swing"],
      borderLeft: ["1px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery('.search-field').focus();
  });

  // top menu
  jQuery('.menu-container').click(function(){
    jQuery(this).toggleClass('open');
    jQuery(this).children('.inner-menu').slideToggle();
  });

  // time links - listing pages
  jQuery('.listing .time-nav a').mouseenter(function(){
    if ( jQuery(this).children('div').hasClass('newer') ){
      jQuery(this).children('div').children('svg').each(function(){
        jQuery(this).animate({
          marginBottom: ["12px", "swing"]
        }, 200, function(){
          // done!
        });
        jQuery(this).parent().animate({
          marginTop: ["-=4", "swing"]
        }, 200, function(){
          // done!
        });
      });
    }
    else {
      jQuery(this).children('div').children('svg').each(function(){
        jQuery(this).animate({
          marginTop: ["12px", "swing"]
        }, 200, function(){
          // done!
        });
        jQuery(this).parent().animate({
          marginBottom: ["-=4", "swing"]
        }, 200, function(){
          // done!
        });
      });
    }
  });
  jQuery('.listing .time-nav a').mouseleave(function(){
    if ( jQuery(this).children('div').hasClass('newer') ){
      jQuery(this).children('div').children('svg').each(function(){
        jQuery(this).animate({
          marginBottom: ["8px", "swing"]
        }, 200, function(){
          // done!
        });
        jQuery(this).parent().animate({
          marginTop: ["+=4", "swing"]
        }, 200, function(){
          // done!
        });
      });
    }
    else {
      jQuery(this).children('div').children('svg').each(function(){
        jQuery(this).animate({
          marginTop: ["8px", "swing"]
        }, 200, function(){
          // done!
        });
        jQuery(this).parent().animate({
          marginBottom: ["+=4", "swing"]
        }, 200, function(){
          // done!
        });
      });
    }
  });

  // single pages
  jQuery('.single .time-nav a').mouseenter(function(){
    jQuery(this).animate({
      width: ["98%", "swing"]
    }, 400, function(){
      // done!
    });
  });
  jQuery('.single .time-nav a').mouseleave(function(){
    jQuery(this).animate({
      width: ["92%", "swing"]
    }, 200, function(){
      // done!
    });
  });

  // content images wrapped in link fix
  jQuery('.entry-content').children('p').children('a').children('img').each(function(){
    jQuery(this).parent('a').addClass("img-container");
  });
  jQuery('.entry-content').children('figure').children('a').children('img').each(function(){
    jQuery(this).parent('a').addClass("img-container");
  });
  jQuery('.page-content').children('p').children('a').children('img').each(function(){
    jQuery(this).parent('a').addClass("img-container");
  });
  jQuery('.page-content').children('figure').children('a').children('img').each(function(){
    jQuery(this).parent('a').addClass("img-container");
  });

  // smooth scrolling for anchor links
  // stolen from http://www.learningjquery.com/2007/10/improved-animated-scrolling-script-for-same-page-links/
  $(document).ready(function() {
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
   
  });

  // blockquote cite tags subbed in for <del> tags
  jQuery('blockquote p del').each(function(){
    jQuery(this).parent('p').addClass("cite");
    jQuery(this).replaceWith(function(){
      return $("<cite />", {html: $(this).html()});
    });
  });

  // pretty 'fireflies' header effect -- Stolen from Codrops http://tympanus.net/codrops/2014/09/23/animated-background-headers/
  (function() {

      var width, height, largeHeader, canvas, ctx, circles, target, animateHeader = true;

      // Main
      initHeader();
      addListeners();

      function initHeader() {
          width = window.innerWidth;
          height = window.innerHeight;
          target = {x: 0, y: height};

          largeHeader = document.getElementById('large-header');
          largeHeader.style.height = height+'px';

          canvas = document.getElementById('demo-canvas');
          canvas.width = width;
          canvas.height = height;
          ctx = canvas.getContext('2d');

          // create particles
          circles = [];
          for(var x = 0; x < width*0.5; x++) {
              var c = new Circle();
              circles.push(c);
          }
          animate();
      }

      // Event handling
      function addListeners() {
          window.addEventListener('scroll', scrollCheck);
          window.addEventListener('resize', resize);
      }

      function scrollCheck() {
          if(document.body.scrollTop > height) animateHeader = false;
          else animateHeader = true;
      }

      function resize() {
          width = window.innerWidth;
          height = window.innerHeight;
          largeHeader.style.height = height+'px';
          canvas.width = width;
          canvas.height = height;
      }

      function animate() {
          if(animateHeader) {
              ctx.clearRect(0,0,width,height);
              for(var i in circles) {
                  circles[i].draw();
              }
          }
          requestAnimationFrame(animate);
      }

      // Canvas manipulation
      function Circle() {
          var _this = this;

          // constructor
          (function() {
              _this.pos = {};
              init();
              console.log(_this);
          })();

          function init() {
              _this.pos.x = Math.random()*width;
              _this.pos.y = height+Math.random()*100;
              _this.alpha = 0.1+Math.random()*0.3;
              _this.scale = 0.1+Math.random()*0.3;
              _this.velocity = Math.random();
          }

          this.draw = function() {
              if(_this.alpha <= 0) {
                  init();
              }
              _this.pos.y -= _this.velocity;
              _this.alpha -= 0.0005;
              ctx.beginPath();
              ctx.arc(_this.pos.x, _this.pos.y, _this.scale*10, 0, 2 * Math.PI, false);
              ctx.fillStyle = 'rgba(255,255,255,'+ _this.alpha+')';
              ctx.fill();
          };
      }

  })();


});