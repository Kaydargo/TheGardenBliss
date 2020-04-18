
$(document).ready(function() {
  // Default size (row, col) 10w 10h
  grid(3,6);
});

$(".gDimBtn").click(function() {
  var widthDropdown = document.getElementById("gardenWidthDrop");
  var getWidth = widthDropdown.options[widthDropdown.selectedIndex].value;

  var heightDropdown = document.getElementById("gardenHeighDrop");
  var getHeight = heightDropdown.options[heightDropdown.selectedIndex].value;

  /*var width =  document.getElementById("gWidth").value;
  var height =  document.getElementById("gHeight").value;*/

 grid(getHeight, getWidth);
});

function grid(rows, columns) {
  var table = "<table class='gardenGrid'>";
  //Get current styling for table
 // var tableStyle= document.querySelector('.gardenGrid');
  //var compTableStyle = window.getComputedStyle(tableStyle);
  var size = (1 / rows * 1000) + "PX";
  
  for (i=0; i<rows; i++) {
    table += "<tr class='gardenGridRow'>";
    for (j=0; j<columns; j++) {
      // table += "<td id="+ j + "class='gardenGridColumn'>"+"</td>";
      table += "<td class='gardenGridColumn'>" + "<div id="+ j + " class='drop'></div>" + "</td>";
    }
    table += "</tr>";
  }

  table += "</table>";
  
  $(".gardenPlanner").empty().append(table);
  $(".gardenGrid").css("height", size);
  $(".gardenGridColumn").css("width", size);
}


//hero image


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
	
	/*
	    Navigation
	*/
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
    $('.top-content').backstretch("images/gardenplanner.jpg");
    $('.call-to-action-container').backstretch("images/gardenplanner.jpg");
    $('.testimonials-container').backstretch("images/gaedenplanner.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
    
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