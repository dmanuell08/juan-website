$(document).ready(function(){
	$(window).scroll(function(){

			//Menu//
	        var posicionDeWindow = $(window).scrollTop();
	        if(posicionDeWindow > 50){
	            $(".Menu-logo").css({"margin": "15px 0"});
	            $(".Menu-logo").css({"width": "60px"});
	            $(".Menu-container").css({"box-shadow": "0 2px 4px 0 #E9EDF5"});
	        }
	        else if(posicionDeWindow < 50){
				$(".Menu-logo").css({"margin": "30px 0"});
				$(".Menu-logo").css({"width": "86px"});
				$(".Menu-container").css({"box-shadow": "none"});
	        }
	        if(posicionDeWindow > 500){
	        	$(".Menu-container").addClass("Menu-visible");
	        } 
	        else if (posicionDeWindow < 480){
	        	$(".Menu-container").removeClass("Menu-visible");
	        }   
    });
    //Menu//
    //Menu//
	$(".Slide").click(function(e){
		e.preventDefault();
		var linkHref = $(this).attr("href");
		$("html, body").animate({
		scrollTop: $(linkHref).offset().top - 100
		}, 1200);
	});
    //Menu//
    //Animaciones con Scroll//
    AOS.init({
      offset: 50,
      duration: 1000,
      easing: 'all cubic-bezier(0.755, 0.050, 0.855, 0.060)',
      delay: 100,
      once: true,
    }); 

});