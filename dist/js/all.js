$(document).ready(function(){$(window).scroll(function(){var o=$(window).scrollTop();o>50?($(".Menu-logo").css({margin:"10px 0"}),$(".Menu-container").css({"box-shadow":"0 2px 4px 0 #E9EDF5"})):o<50&&($(".Menu-logo").css({margin:"30px 0"}),$(".Menu-container").css({"box-shadow":"none"}))}),$(".Slide").click(function(o){o.preventDefault();var n=$(this).attr("href");$("html, body").animate({scrollTop:$(n).offset().top-100},1200)}),AOS.init({offset:50,duration:1e3,easing:"all cubic-bezier(0.755, 0.050, 0.855, 0.060)",delay:100,once:!0})});