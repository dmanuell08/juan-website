$(document).ready(function(){function e(e,o,t){var n=$("#Home-header"),i=e.pageX-n.offset().left,a=e.pageY-n.offset().top;TweenMax.to(o,1,{x:(i-n.width()/3)/n.width()*t,y:(a-n.height()/3)/n.height()*t})}$(window).scroll(function(){var e=$(window).scrollTop();e>50?$("#Menu").css({height:"80px"}):e<50&&$("#Menu").css({height:"120px"})});var o=0;$(window).scroll(function(){$(".Menu-container").toggleClass("hide",$(window).scrollTop()>o),o=$(window).scrollTop()}),$(".Slide").click(function(e){e.preventDefault();var o=$(this).attr("href");$("html, body").animate({scrollTop:$(o).offset().top-100},1200)}),AOS.init({offset:50,duration:1e3,easing:"all cubic-bezier(0.755, 0.050, 0.855, 0.060)",delay:100,once:!0}),$(".carousel").carousel({pause:"hover",interval:6e3}),$("#Home-header").mousemove(function(o){e(o,".Image-slide",-40),e(o,".Phone-2",-20)}),$(".carousel").on("touchstart",function(e){var o=e.originalEvent.touches[0].pageX;$(this).one("touchmove",function(e){var t=e.originalEvent.touches[0].pageX;Math.floor(o-t)>5?$(this).carousel("next"):Math.floor(o-t)<-5&&$(this).carousel("prev")}),$(".carousel").on("touchend",function(){$(this).off("touchmove")})}),$("#Hamb-btn").click(function(){$(".Menu-container").toggleClass("active"),$(this).toggleClass("active")})});