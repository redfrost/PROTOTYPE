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



// Carousel	Auto
		jQuery(document).ready(function() {
			 $('#myCarousel.slide').carousel({
				   interval: 6000,
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


//Convert Address tags into a map link
	jQuery(document).ready(function () {
        $('address').each(function () {
            var link = "<a href='http://maps.apple.com/?q=" + encodeURIComponent( $(this).text() ) + "' target='_blank'>" + $(this).text() + "</a>";
            $(this).html(link);
        });
    });


//Convert Address into an embedded map
    jQuery(document).ready(function(){
      $(".mapaddress").each(function(){                        
        var embed ="<iframe width='425' height='350' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='https://maps.google.com/maps?&amp;q="+ encodeURIComponent( $(this).text() ) +"&amp;output=embed'></iframe>";
          $(this).html(embed);                               
       });
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


/*
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
*/
