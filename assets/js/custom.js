/* Custom codes */

// iPhone pull addressbar
/mobile/i.test(navigator.userAgent) && !window.location.hash && setTimeout(function () {
  window.scrollTo(0, 1);
}, 1000);



// Mobile dropdown menu
$(function() {
$("<select />").appendTo(".nav-hover-box"); 

$("<option />", 
{ 
   "selected": "selected", 
   "value"   : "", 
   "text"    : "Site Menu" // default <option> to display in dropdown 

}).appendTo("nav select"); 

$("nav a").each(function()
{ 
 var el = $(this); 
 $("<option />", { 
	 "value"   : el.attr("href"), 
	 "text"    : el.text() 
 }).appendTo("nav select"); 
});

$("nav select").change(function() 
{ 
  window.location = $(this).find("option:selected").val(); 
}); });




	
// Tooltip
	  jQuery(document).ready(function () {
	    $("[rel=tooltip]").tooltip();
	  });

	
// Popover
	  jQuery(document).ready(function () {
	    $("[rel=popover]").popover();
	  });



// Carousel	
		jQuery(document).ready(function() {
			 $('#myCarousel-auto').carousel({
				   interval: 5000,
					  cycle: true
			 });
		});
		var $ = jQuery.noConflict();


// Affix
		$(function(){
		$('.bs-docs-sidenav').affix({
			offset: {
			top: 120, 
			bottom: 1500
				}
			})
		});
		
		
// Top menu Affix
		$(function(){
		$('.navbar-fixed-top').affix({
			offset: {
			top: 20, 
			bottom:0
				}
			})
		});


/*
// Dropdown Menu Fade    
jQuery(document).ready(function(){
    $(".nav-hover-box li.dropdown").hover(
         function() { $('ul', this).fadeIn("fast");
        },
        function() { $('ul', this).fadeOut("fast");
    });
});
*/


//Fixed Submenu
	jQuery(document).scroll(function(){
		// If has not activated (has no attribute "data-top"
		if (!$('.subnav').attr('data-top')) {
			// If already fixed, then do nothing
			if ($('.subnav').hasClass('subnav-fixed')) return;
			// Remember top position
			var offset = $('.subnav').offset()
			$('.subnav').attr('data-top', offset.top);
		}
	
		if ($('.subnav').attr('data-top') - $('.subnav').outerHeight() <= $(this).scrollTop())
			$('.subnav').addClass('subnav-fixed');
		else
			$('.subnav').removeClass('subnav-fixed');
	});

