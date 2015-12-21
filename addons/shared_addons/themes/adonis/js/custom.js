$(document).ready(function(){	
//Navigation-----------------------------//
function triggerMenu(){
	
    $(" #nav ul ").css({
        display: "none"
    });
    
    $(" #nav").children('li').hover(function(){
        var ulFirst=$(this).find('ul:first');
        ulFirst.css({
            visibility: "visible",
            opacity: 0,
            display: "block"
        }).animate({
            opacity:1,
            left:'0px'
        },500);
    },function(){
        $(this).find('ul:first').css({
            visibility: "hidden",
            left:'-15px'
        });
       
    });
    $("#nav li ul li").hover(function(){
        $(this).find('ul:first').css({
            visibility: "visible",
            opacity: 0,
            display: "block"
        }).animate({
            opacity:1,
            left:'100%'
        },500);
    },function(){
        $(this).find('ul:first').css({
            visibility: "hidden",
            left:'115%'
        });
    });
    /* Magic Line Navigation Script */
	(function ($) { 
		var el, 
			leftPos, 
			newWidth, 
			mainNav = $('#nav');
		
		mainNav.append('<li id="line"></li>');
		
		var magicLine = $('#line'), 
			currentItem = undefined;
		
		currentItem = mainNav.children('li.current');
                if (currentItem.html() === undefined){
                    currentItem = mainNav.children('li.has_current');
                }
		if (currentItem.html() === undefined){
                    currentItem = mainNav.children('li.first');
                }
		if (currentItem !== undefined) {
			magicLine.width(currentItem.width()).css( { 
				left : currentItem.position().left 
			} ).data( { 
				origWidth : magicLine.width(), 
				origLeft : magicLine.position().left 
			} );
			
			$(window).resize(function () { 
				if ($(this).width() > 540) {
					magicLine.width(currentItem.width()).css( { 
						left : currentItem.position().left 
					} ).data( { 
						origWidth : magicLine.width(), 
						origLeft : magicLine.position().left 
					} );
				}
			} );
			
			if ($(window).width() > 540) {
				mainNav.children('li').hover(function () { 
					el = $(this);
					newWidth = el.width();
					leftPos = el.position().left;
					
					magicLine.stop().animate( { 
						width : newWidth, 
						left : leftPos 
					}, 500, 'easeOutSine');
				}, function () { 
					magicLine.stop().animate( { 
						width : magicLine.data('origWidth'), 
						left : magicLine.data('origLeft') 
					}, 500, 'easeOutSine');
				} );
			}
		} else {
			magicLine.remove();
		}
	} )(jQuery);
	
    
}
function triggerUserMenu(){
    var userMenu=$("#user-main-menu");
    userMenu.css({
        display: "none"
    });
    $("#logged-in-menu").hover(function(){
        userMenu.css({
            visibility: "visible",
            display: "none"
        }).slideDown(250);
    },function(){
        userMenu.css({
            visibility: "hidden"
        });
    });
}
/mobile/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
    if (!pageYOffset) window.scrollTo(0, 1);
}, 1000);

//Accordion ------------------------------//

    (function() {
            var $container = $('.accordion-body'),
                    $acc_head   = $('.accordion-head');

            $container.hide();
            $acc_head.first().addClass('active').next().show();
            $acc_head.last().addClass('last');

            $acc_head.on('click', function(e) {
                    if( $(this).next().is(':hidden') ) {
                            $acc_head.removeClass('active').next().slideUp(300);
                            $(this).toggleClass('active').next().slideDown(300);
                    }
                    e.preventDefault();
            });

    })();

triggerMenu(); //menu ---------------//
triggerUserMenu();//User menu//
selectnav('nav');//menu switch-------------//
 //Tooltips------------------//
 $('*[rel=tooltip]').tooltip();
//prettyPhoto----------------------------//
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: false
    });

   $("#get_ride").bind('click',function(e){
    navigator.geolocation.getCurrentPosition(foundLocation, errorLocation);

    function foundLocation(position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        //alert(lat+' '+lng);
        //This is where the geocoding starts
        var locationURL= "http://maps.googleapis.com/maps/api/geocode/json?latlng="
            + lat + "," + lng + "&sensor=false&callback=myLocation"
        $.getJSON(locationURL, myLocation);
        $.ajax({
		  type: "POST",
		  url: "http://localhost/getaride/users/user_ride",
		  dataType: 'json',
		  data: { start_location: $("#start").val(), destination_location: $("#end").val(), lat: position.coords.latitude, lng: position.coords.longitude}
		});
           	
    }
    function myLocation(locationReturned) {
	    town = locationReturned.results[0].address_components[1].short_name;
	    state = locationReturned.results[0].address_components[4].short_name;
	    console.log(town,state);
	}
    function errorLocation() {
        alert("Error finding your location.");
    }
	});
$('#mystar').raty();

$("#mystar").bind('click',function(e) {
	$.ajax({
		  type: "POST",
		  url: "http://localhost/getaride/users/save_rating",
		  dataType: 'json',
		  data: { rating: $("input[name=score]").val()}
		});
	

});

$("#sub_feedback").bind('click',function(e) {
	$.ajax({
		  type: "POST",
		  url: "http://localhost/getaride/users/save_feedback",
		  dataType: 'json',
		  data: { feedback: $("#fin_ride").val()}
		});
	

});


});