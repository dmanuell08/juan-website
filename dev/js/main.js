$(document).ready(function(){
   $(".Icon, .nav-link").click(function(){
      $(".Icon").toggleClass("active");
      $(".Hamburguer").toggleClass("active");
    });

      $(".Slide").click(function(e){
    	e.preventDefault();
    	var linkHref = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 90
        }, 1200);
    });


    $(window).scroll(function(){
        var posicionDeWindow = $(window).scrollTop();

        if(posicionDeWindow > 570){
            $("#fixed-nav").addClass("fixed-nav");
            $(".logo-juan").css({"display": "none"});
            $(".Logo_black").css({"display": "inline-block"});
        }
        else if(posicionDeWindow < 520){
            $("#fixed-nav").removeClass("fixed-nav");
            $(".logo-juan").css({"display": "initial"});
            $(".Logo_black").css({"display": "none"});
        }

        if(posicionDeWindow > 600){
            $(".fixed-nav").addClass("nav_visible");
        }

        else if(posicionDeWindow < 600){
            $(".fixed-nav").removeClass("nav_visible");
        }         
    });
});