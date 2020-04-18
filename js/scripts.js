
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
	console.log('test');	
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
	
    /*
        Background slideshow
    */


   if ( window.location.pathname.includes("index.php")) {
	console.log('Home');
    $('.top-content').backstretch("images/about-min.jpg");
   
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
	}

	else if (window.location.pathname.includes("how-to.php")){
		console.log('how to');
		$('.top-content').backstretch("images/howTo.jpg");
		$('.call-to-action-container').backstretch("images/HowToHero-min.jpg");
		$('.testimonials-container').backstretch("images/HowToHero-min.jpg");
		
		$('#top-navbar-1').on('shown.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
		$('#top-navbar-1').on('hidden.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
	}

	else if (window.location.pathname.includes("plants.php")){
		console.log('plants');
		$('.top-content').backstretch("images/plants_3-min.jpg");
    
		$('#top-navbar-1').on('shown.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
		$('#top-navbar-1').on('hidden.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
	}

	else if (window.location.pathname.includes("plantInfo.php")){
		console.log('plants info');
		$('.top-content').backstretch("images/PlantInfoHero-min.jpg");
    
		$('#top-navbar-1').on('shown.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
		$('#top-navbar-1').on('hidden.bs.collapse', function(){
			$('.top-content').backstretch("resize");
		});
	}

	else if (window.location.pathname.includes('gardenPlanner.php')){
		console.log('planner');
		$('.top-content').backstretch("images/gardenPlanner-min.jpg");
   
    
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

function myFunction() {

	var btn = document.getElementById("myButton");

	if (btn.value == "Add to Favourites") {
		btn.value = "Favourited";
		btn.innerHTML = "Favourited";
	}
	else {
		btn.value = "Add to Favourites";
		btn.innerHTML = "Add to Favourites";
	}

}