$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

// STICKY MENU
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 200) {
    $('.stickymenu, .hamburger').addClass('reveal');
  } else {
    $('.stickymenu, .hamburger').removeClass('reveal');
  }
});

$('.photo-gallery').slick({
  autoplay: true,
  arrows: true,
  dots: true,
});

// SERVICES ACCORDION DROPDOWNS
$('.service').click(function(){
	$(this).children('.more-content').slideToggle();
	$('.more-content').not($(this).children()).slideUp();
});

//$('.more-content li').append('&nbsp;&bull;');

function viewportHeight() {
	$('.viewport-banner').height($(window).height());
}

$(document).ready(function () {
	viewportHeight();
	//serviceHeight();
});

$(window).resize(function () {
	viewportHeight();
	//serviceHeight();
});

/*$('.service').click(function () {
	$(this).children('ul').slideToggle();
});

function serviceHeight() {
	$('.service:nth-of-type(5)').height($('.service:nth-of-type(4)').height());
}*/