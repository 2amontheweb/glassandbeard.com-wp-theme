/* globals $: false */
/* jshint strict: false */

$(function () {

  // set #home-top to full screen
  function fullscreen(){
    $('#home-top, #home-top .overlay, #home-top, #home-top .overlay .stripes, #home-top, #home-top .overlay .logo-container').css({
      height: ($(window).height() - 74)
    });
  }

  fullscreen();
  $(window).resize(function() {
    fullscreen();
  });


  // manage fixed nav on home page scroll
  var navbar = $('#home-nav');
  if (navbar.length !== 0) {
    var origOffsetY = navbar.offset().top;

    var scroll = function() {
      if ($(window).scrollTop() >= origOffsetY) {
        navbar.addClass('sticky');
        $('#home-content').addClass('navbar-padding');
      } else {
        navbar.removeClass('sticky');
        $('#home-content').removeClass('navbar-padding');
      }
    };
    document.onscroll = scroll;
  }

  if ($(window).width() >= 768) {
    $('#home-about .middle').height($('#home-about .right').height());
  }

  // Set up date for each blog post.
  $('.date').each(function(){
    var arr = $(this).text().split('/'), day = arr[0], mon = arr[1];
    $(this).empty().html('<div class="day">'+day+'</div><div class="slash">/</div><div class="month">'+mon+'</div>');
  });


  // Blog stripes
  $( '#home-blog .stripes' ).height( $( '#home-blog' ).height() );
  $( '#home-blog .stripes' ).css( 'margin-left', ($( '#home-blog' ).width() / 2) + 'px' );

  $('#home-portfolio .portfolio-wrapper').slick({
    infinite: true,
    speed: 500,
    fade: true,
    slidesToShow: 1,
    adaptiveHeight: true,
    cssEase: 'linear'
  });

  $('.modal .portfolio-wrapper').bxSlider({
    auto: true,
    pause: 5000,
    infiniteLoop: true,
    speed: 500,
    pager: false,
    mode: 'fade',
    adaptiveHeight: true,
    adaptiveHeightSpeed: 500
  });
});
