$(function(){function e(){$("#home-top, #home-top .overlay, #home-top, #home-top .overlay .stripes, #home-top, #home-top .overlay .logo-container").css({height:$(window).height()-74})}e(),$(window).resize(function(){e()});var o=$("#home-nav");if(0!==o.length){var t=o.offset().top,i=function(){$(window).scrollTop()>=t?(o.addClass("sticky"),$("#home-content").addClass("navbar-padding")):(o.removeClass("sticky"),$("#home-content").removeClass("navbar-padding"))};document.onscroll=i}$("#home-about .middle").height($("#home-about .right").height()),$(".date").each(function(){var e=$(this).text().split("/"),o=e[0],t=e[1];$(this).empty().html('<div class="day">'+o+'</div><div class="slash">/</div><div class="month">'+t+"</div>")}),$("#home-blog .stripes").height($("#home-blog").height()),$("#home-blog .stripes").css("margin-left",$("#home-blog").width()/2+"px"),$("#home-portfolio .portfolio-wrapper").slick({infinite:!0,speed:500,fade:!0,slidesToShow:1,adaptiveHeight:!0,cssEase:"linear"}),$(".modal .portfolio-wrapper").bxSlider({auto:!0,pause:5e3,infiniteLoop:!0,speed:500,pager:!1,mode:"fade",adaptiveHeight:!0,adaptiveHeightSpeed:500})}),$(function(){$(".smooth-scroll[href*=#]:not([href=#])").click(function(){if(window.location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")&&window.location.hostname===this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html,body").animate({scrollTop:e.offset().top},1e3),!1}})});