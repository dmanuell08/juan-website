$(document).ready(function(){function o(o,e,t){var n=$("#Home-header"),i=o.pageX-n.offset().left,a=o.pageY-n.offset().top;TweenMax.to(e,1,{x:(i-n.width()/3)/n.width()*t,y:(a-n.height()/3)/n.height()*t})}$(window).scroll(function(){var o=$(window).scrollTop();o>50?$("#Menu").css({height:"80px"}):o<50&&$("#Menu").css({height:"120px"})});var e=0;$(window).scroll(function(){$(".Menu-container").toggleClass("hide",$(window).scrollTop()>e),e=$(window).scrollTop()}),$(".Slide").click(function(o){o.preventDefault();var e=$(this).attr("href");$("html, body").animate({scrollTop:$(e).offset().top-100},1200)}),AOS.init({offset:50,duration:1e3,easing:"all cubic-bezier(0.755, 0.050, 0.855, 0.060)",delay:100,once:!0}),$(".carousel").carousel({pause:"hover",interval:8e3}),$("#Home-header").mousemove(function(e){o(e,".Phone-1",-40),o(e,".Phone-2",-20)}),$(".carousel").on("touchstart",function(o){var e=o.originalEvent.touches[0].pageX;$(this).one("touchmove",function(o){var t=o.originalEvent.touches[0].pageX;Math.floor(e-t)>5?$(this).carousel("next"):Math.floor(e-t)<-5&&$(this).carousel("prev")}),$(".carousel").on("touchend",function(){$(this).off("touchmove")})})});