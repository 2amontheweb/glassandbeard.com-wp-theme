$(function(){function o(){$("#home-top, #home-top .overlay, #home-top, #home-top .overlay .stripes, #home-top, #home-top .overlay .logo-container").css({height:$(window).height()-74})}o(),$(window).resize(function(){o()});var t=$("#home-nav");if(0!==t.length){var e=t.offset().top,h=function(){$(window).scrollTop()>=e?(t.addClass("sticky"),$("#home-content").addClass("navbar-padding")):(t.removeClass("sticky"),$("#home-content").removeClass("navbar-padding"))};document.onscroll=h}$("#home-about .middle").height($("#home-about .right").height()),$(".date").each(function(){var o=$(this).text().split("/"),t=o[0],e=o[1];$(this).empty().html('<div class="day">'+t+'</div><div class="slash">/</div><div class="month">'+e+"</div>")}),$("#home-blog .stripes").height($("#home-blog").height()),$("#home-blog .stripes").css("margin-left",$("#home-blog").width()/2+"px")}),$(function(){$(".smooth-scroll[href*=#]:not([href=#])").click(function(){if(window.location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")&&window.location.hostname===this.hostname){var o=$(this.hash);if(o=o.length?o:$("[name="+this.hash.slice(1)+"]"),o.length)return $("html,body").animate({scrollTop:o.offset().top},1e3),!1}})});