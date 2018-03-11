// make animations visible
$(document).ready(function() {
  $('header').addClass('visibility');

  $('.slogan h1').addClass('visibility');
  $('.features .col-md-4').addClass('visibility');
  $('.contact .col-md-12').addClass('visibility');
});

//header animation
$(window).load(function() {
  $('header').addClass("animated fadeIn");
});

// display static navbar if not at the top of the site
$(window).scroll(function() {
  var scrollTop = $(window).scrollTop();
  if (scrollTop > 200) {
    $('.navbar-default').css('display', 'block');
    $('.navbar-default').addClass('fixed-to-top');
  } else if (scrollTop == 0) {
    $('.navbar-default').removeClass('fixed-to-top');
  }

  //animations that happen when the user scrolls over an element
  $('.slogan h1').each(function() {
    var imagePos = $(this).offset().top;
    var topOfWindow = $(window).scrollTop();

    if (imagePos < topOfWindow + 650) {
      $(this).addClass("animated fadeInUp");
    }
  });

  $('.features .col-md-4').each(function() {
    var imagePos = $(this).offset().top;
    var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow + 650) {
      $(this).addClass("animated fadeInUp");
    }
  });

  $('.contact .col-md-12').each(function() {
    var imagePos = $(this).offset().top;
    var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow + 550) {
      $(this).addClass("animated fadeInUp");
    }
  });

	$('.detail .carousel').carousel({
	  interval: 4000
	})
});

function parallax() {
  	var scaleBg = -$(window).scrollTop() / 3;
    $('.slogan').css('background-position-y', scaleBg - 150);
    $('.contact').css('background-position-y', scaleBg + 200);
}

function navbar() {
  if ($(window).scrollTop() > 1) {
    $('#navigation').addClass('show-nav');
  } else {
    $('#navigation').removeClass('show-nav');
  }
}

$(document).ready(function() {
  var browserWidth = $(window).width();
  if (browserWidth > 560) {
    $(window).scroll(function() {
      parallax();
      navbar();
    });
  }
});

$(window).resize(function() {
  var browserWidth = $(window).width();
  if (browserWidth > 560) {
    $(window).scroll(function() {
      parallax();
      navbar();
    });
  }
});
