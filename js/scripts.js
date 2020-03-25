
function scroll_to(clicked_link, nav_height) {
	var element_class = clicked_link.attr('href').replace('#', '.');
	var scroll_to = 0;
	if(element_class != '.top-content') {
		element_class += '-container';
		scroll_to = $(element_class).offset().top - nav_height;
	}
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}
jQuery(document).ready(function() {
if ( window.location.pathname.includes("plantInfo.php")){
	console.log("WHYYYYYYYYYYYYYYYYY");
	$('.top-content').backstretch("images/AboutUsHero.jpg");
   
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
}
});

jQuery(document).ready(function() {
	/*
	    Navigation
	*/
	$('footer').backstretch("images/footer.jpg");
	$('a.scroll-link').on('click', function(e) {
		e.preventDefault();
		scroll_to($(this), $('nav').outerHeight());
	});
	// toggle "navbar-no-bg" class
	$('.top-content .text').waypoint(function() {
		$('nav').toggleClass('navbar-no-bg');
	});

   if ( window.location.pathname.includes("index.php")) {
    $('.top-content').backstretch("images/AboutUsHero.jpg");
   
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
	}

	else if (window.location.pathname.includes("how-to.php")){
		$('.top-content').backstretch("images/HowToHero.jpg");
		$('.call-to-action-container').backstretch("images/howTo.jpg");
		$('.testimonials-container').backstretch("images/howTo.jpg");
		
		$('#top-navbar-1').on('shown.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
		$('#top-navbar-1').on('hidden.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
	}

	else if (window.location.pathname.includes("plants.php")){
		$('.top-content').backstretch("images/PlantsHero.jpg");
    
		$('#top-navbar-1').on('shown.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
		$('#top-navbar-1').on('hidden.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
	}


	else if (window.location.pathname.includes('planner.php')){
		$('.top-content').backstretch("images/GardenPlannerHero.jpg");
    
		$('#top-navbar-1').on('shown.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
		$('#top-navbar-1').on('hidden.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
	}
	else if (window.location.pathname.includes('beeHelpful.php')){
		$('.top-content').backstretch("images/BeeHero.jpg");
    
		$('#top-navbar-1').on('shown.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
		$('#top-navbar-1').on('hidden.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
	}
	else if (window.location.pathname.includes('login.php')){

	}
   
	
	


    $('a[data-toggle="tab"]').on('shown.bs.tab', function(){
    	$('.testimonials-container').backstretch("resize");
    });
    
    /*
        Wow
    */
    new WOW().init();
	
});


jQuery(window).load(function() {
	
	/*
		Hidden images
	*/
	$(".testimonial-image img").attr("style", "width: auto !important; height: auto !important;");
	
});