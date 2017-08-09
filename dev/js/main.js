var appMaster = {
    animateScript: function() {
       $('.scrollpoint.sp-effect1').waypoint(function(){$(this).toggleClass('active');$(this).addClass('animated fadeInLeft');},{offset:'70%'});
       $('.scrollpoint.sp-effect2').waypoint(function(){$(this).toggleClass('active');$(this).addClass('animated fadeInRight');},{offset:'70%'});
       $('.scrollpoint.sp-effect3').waypoint(function(){$(this).toggleClass('active');$(this).addClass('animated fadeInDown');},{offset:'70%'});
       $('.scrollpoint.sp-effect4').waypoint(function(){$(this).toggleClass('active');$(this).addClass('animated fadeIn');},{offset:'70%'});
       $('.scrollpoint.sp-effect5').waypoint(function(){$(this).toggleClass('active');$(this).addClass('animated fadeInUp');},{offset:'70%'});
       $('.scrollpoint.sp-effect6').waypoint(function(){$(this).toggleClass('active');$(this).addClass('animated bounceIn');},{offset:'70%'});
    },
}

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(".nav-link").bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr("href")).offset().top - -60)
        }, 1250, "swing");
        event.preventDefault();
    });

    // Closes the Responsive Menu on Menu Item Click
    $(".navbar-collapse ul li a").click(function(){ 
            $('.navbar-toggle:visible').click();
    });

})(jQuery);




