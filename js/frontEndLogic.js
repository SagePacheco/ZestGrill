//Browser Support Code

// Initialize and redirect if needed
$( document ).ready(function() {
	"use strict";
//	new WOW().init();
	timeFunction();
	if (screen.width <= 1000) {
		window.location = "http://m.zestgrill.com";
	}
	
	// Script for commercial video functions
	var video = $('#bgvid');
	video.on('ended', function (){
        video.fadeOut();
	});
    
	function timeFunction(){
		var now = new Date();
		
		if(now.getHours() >= 3 && now.getHours() <= 17) {
		menuLogic("lunch");
		}
		if(now.getHours() > 17 && now.getHours() <= 24 || now.getHours() < 3) {
		menuLogic("dinner");
		}
	}	
	
	$("#drink").click(function(){
		menuLogic("drink");
	});
	
	$("#brunch").click(function(){
		menuLogic("brunch");
	});
	
	$("#lunch").click(function(){
		menuLogic("lunch");
	});
	
	$("#dinner").click(function(){
		menuLogic("dinner");
	});
	
	function menuLogic(menu){
		$("#menu_choice a").each(function(){
			if(menu === $(this).attr("id")){
				$(this).addClass("menu_selected");			
			} else {
				$(this).removeClass("menu_selected");						
			}
		});
		$("#menu .subMenu").each(function(){
			if(menu + "_options" === $(this).attr("id")){
				$(this).removeClass("hidden");						
			} else {
				$(this).addClass("hidden");						
			}
		});
	}
	
	// WayPoint Custom Code

	var links = $('#navigation').find('li');
	var slide = $('.slide');
	var button = $('.button');
	var navbutton = $('.nav_button');
	var mywindow = $(window);
	var htmlbody = $('html,body');
	var History = window.History;
	var dataslide;
	
	function updateURL(dataslide){
		if (dataslide === 1){History.replaceState({}, "Zest Grill",  "?Navigation");}
		if (dataslide === 2){History.replaceState({}, "Zest Grill: Menu",  "?Menu");}
		if (dataslide === 3){History.replaceState({}, "Zest Grill: Location",  "?Location");}
		if (dataslide === 4){History.replaceState({}, "Zest Grill: News",  "?News");}
		if (dataslide === 5){History.replaceState({}, "Zest Grill: About Us",  "?About_Us");}	
	}
	if ( !History.enabled ) {
         // History.js is disabled for this browser.
         // This is because we can optionally choose to support HTML4 browsers or not.
        return false;
    }
	
		History.Adapter.bind(window,'statechange',function() { // Note: We are using statechange instead of popstate
        var State = History.getState();
        $('#content').load(State.url);
        /* Instead of the line above, you could run the code below if the url returns the whole page instead of just the content (assuming it has a `#content`):
        $.get(State.url, function(response) {
            $('#content').html($(response).find('#content').html()); });
        */
        });	
		
	//Setup waypoints plugin
	slide.waypoint(function (event, direction) {
	    //cache the variable of the data-slide attribute associated with each slide
	    dataslide = $(this).attr('data-slide');
	    //If the user scrolls up change the navigation link that has the same data-slide attribute as the slide to active and
	    //remove the active class from the previous navigation link
	    if (direction === 'down') {
	        $('#navigation li[data-slide="' + dataslide + '"]').addClass('current').prev().removeClass('current');
			updateURL(dataslide);
	    }
	    // else If the user scrolls down change the navigation link that has the same data-slide attribute as the slide to active and
	    //remove the active class from the next navigation link
	    else {
	        $('#navigation li[data-slide="' + dataslide + '"]').addClass('current').next().removeClass('current');
			updateURL(dataslide);
	    }
	});
	//waypoints doesnt detect the first slide when user scrolls back up to the top so we add this little bit of code, that removes the class
	//from navigation link slide 2 and adds it to navigation link slide 1.
	mywindow.scroll(function () {
	    if (mywindow.scrollTop() === 0) {
	        $('#navigation li[data-slide="1"]').addClass('current');
	        $('#navigation li[data-slide="2"]').removeClass('current');
			updateURL(0);
	    }
	});
	//Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
	//easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
	function goToByScroll(dataslide) {
	    htmlbody.animate({
	        scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top
	    }, 2000, 'easeInOutExpo');
	}
	//When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
	links.click(function (e) {
	    e.preventDefault();
	    var dataslide = $(this).attr('data-slide');
	    goToByScroll(dataslide);
		updateURL(dataslide);
	});
	//When the user clicks on the button, get the data-slide attribute value of the button and pass that variable to the goToByScroll function
	button.click(function (e) {
	    e.preventDefault();
	    var dataslide = $(this).attr('data-slide');
	    goToByScroll(dataslide);
		updateURL(dataslide);
	});
	//When the user clicks on the central navigation, get the data-slide attribute value of the button and pass that variable to the goToByScroll function
	navbutton.click(function (e) {
	    e.preventDefault();
	    var dataslide = $(this).attr('data-slide');
	    goToByScroll(dataslide);
		updateURL(dataslide);
	});	
});