$(document).ready(function(){
	$(window).scroll(function(){

			//Menu//
	        var posicionDeWindow = $(window).scrollTop();
	        if(posicionDeWindow > 50){
	            $("#Menu").css({"height": "80px"});
	            $(".Menu-container").css({"background-color": "#1A1D33"});
	        }
	        else if(posicionDeWindow < 50){
				$("#Menu").css({"height": "120px"});
				$(".Menu-container").css({"background-color": "none"});
	        }
	        if(posicionDeWindow > 500){
	        	$(".Menu-container").addClass("Menu-visible");
	        } 
	        else if (posicionDeWindow < 480){
	        	$(".Menu-container").removeClass("Menu-visible");
	        }   
    });
	var zero = 0
    $(window).scroll(function(){
    	$(".Menu-container").toggleClass("hide",$(window).scrollTop()
    		> zero);
    		zero = $(window).scrollTop();
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


    //Carousel Bootstrap//
    $('.carousel').carousel({
	  pause: true,
	  interval: false
	});

	//Move elements on mouse//
	$("#Home-header").mousemove(function(e) {
	  parallaxIt(e, ".Phone-1", -40);
	  parallaxIt(e, ".Phone-2", -20);
	});

	function parallaxIt(e, target, movement) {
	  var $this = $("#Home-header");
	  var relX = e.pageX - $this.offset().left;
	  var relY = e.pageY - $this.offset().top;

	  TweenMax.to(target, 1, {
	    x: (relX - $this.width() / 3) / $this.width() * movement,
	    y: (relY - $this.height() / 3) / $this.height() * movement
	  });
	}



});