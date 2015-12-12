/* globals $: false */
/* jshint strict: false */

$(function () {

  // set #home-top to full screen
  function fullscreen(){
    $('#home-top, #home-top .overlay').css({
      height: ($(window).height() - 50)
    });
  }

  fullscreen();
  $(window).resize(function() {
    fullscreen();
  });

  // manage fixed nav on scroll
  var navbar = $('.navbar');
  var origOffsetY = navbar.offset().top;
  function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
      $('.navbar').addClass('sticky');
      $('.content').addClass('navbar-padding');
    } else {
      $('.navbar').removeClass('sticky');
      $('.content').removeClass('navbar-padding');
    }
  }

  document.onscroll = scroll;
});
