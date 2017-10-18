$(document).ready(function(){
   $(".Icon, .nav-link").click(function(){
      $(".Icon").toggleClass("active");
      $(".Hamburguer").toggleClass("active");
    });


    console.log($("#What-i-do").offset().top);

      $(".Slide").click(function(e){
    	e.preventDefault();
    	var linkHref = $(this).attr("href");
        console.log($(linkHref).offset().top);

        $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 80
        }, 1200);
    });

    

    $(window).scroll(function(){
        var posicionDeWindow = $(window).scrollTop();

        if(posicionDeWindow > 600){
            $("#fixed-nav").addClass("fixed-nav");
            $("#Row").addClass("margen");
            $(".logo-juan").css({"display": "none"});
            $(".Logo_black").css({"display": "inline-block"});
            $("#Home_section").removeClass("active");
        }
        else if(posicionDeWindow < 520){
            $("#fixed-nav").removeClass("fixed-nav");
            $("#Row").removeClass("margen");
            $(".logo-juan").css({"display": "initial"});
            $(".Logo_black").css({"display": "none"});
            $("#Home_section").addClass("active");
        }

        if(posicionDeWindow > 630){
            $(".fixed-nav").addClass("nav_visible");
            $("#Work").addClass("active");
        }

        else if(posicionDeWindow < 630){
            $("#Work").removeClass("active");
            $(".fixed-nav").removeClass("nav_visible");
        } 

        if(posicionDeWindow > 2450){
            $("#Work").removeClass("active");
            $("#What_i_do").addClass("active");
        }

        else if(posicionDeWindow < 2450){
            $("#What_i_do").removeClass("active");
        } 

        if(posicionDeWindow > 3520){
        	$("#Contact_me").addClass("active");
        	$("#What_i_do").removeClass("active");
        } 
        else if(posicionDeWindow < 3520){
        	$("#Contact_me").removeClass("active");
        }           
    });
});