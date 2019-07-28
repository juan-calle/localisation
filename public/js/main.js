/* Author:

*/

// Flex Slider

jQuery(window).load(function() {
jQuery('.flexslider').flexslider({
animation: 'slide',
controlNav: false,
});
});

// Scroll to top

jQuery(window).scroll(function() {
if (jQuery(this).scrollTop()) {
jQuery('.gototop').fadeIn();
} else {
jQuery('.gototop').fadeOut();
}
});

// Fancybox

jQuery(document).ready(function() {
		jQuery(".fancybox").fancybox({
			scrolling: 'no',
			helpers : {
		        title: {
		            type: 'inside',
		            position: 'top'
		        }
    		},
    		afterShow: function(current) {
    			var image = jQuery('.fancybox-inner img').attr('src');
    			jQuery('.fancybox-inner img').attr('data-zoom-image', image);
    			jQuery('.fancybox-inner img').elevateZoom({
					zoomType: "lens",
					lensShape: "round",
					lensSize: 200
				});
    		}
		});
});

// Video Rollover

jQuery(document).ready(function(){
jQuery(".roll").css("opacity","0");
 
jQuery(".roll").hover(function () {
 
jQuery(this).stop().animate({
opacity: .7
}, "slow");
},
 
function () {
jQuery(this).stop().animate({
opacity: 0
}, "slow");
});
});

// Video Rollover

jQuery(document).ready(function(){
jQuery(".vidroll").css("opacity","0");
 
jQuery(".vidroll").hover(function () {
 
jQuery(this).stop().animate({
opacity: .7
}, "slow");
},
 
function () {
jQuery(this).stop().animate({
opacity: 0
}, "slow");
});
});

// Image Rollover

jQuery(document).ready(function(){
jQuery(".imgroll").css("opacity","0");
 
jQuery(".imgroll").hover(function () {
 
jQuery(this).stop().animate({
opacity: .7
}, "slow");
},
 
function () {
jQuery(this).stop().animate({
opacity: 0
}, "slow");
});
});

// Search Drop Down

jQuery(document).ready(function(){
jQuery("#dropsearch").hide();
jQuery('.searchtog').click(function(){

if (!jQuery("#dropsearch").is(":visible"))
jQuery('#dropsearch').removeClass("searcht").addClass("searchb");



jQuery("#dropsearch").slideToggle(function() { 
	if (!jQuery("#dropsearch").is(":visible"))
	jQuery('#dropsearch').addClass("searcht").removeClass("searchb");

	});
	});
	

	//Display a relevant tab depending on hash
	// if (location.hash !== '') jQuery('a[href="' + location.hash + '"]').tab('show');

	// if (document.URL.indexOf('?instance=') > -1) {
	// 	if (document.URL.indexOf('?instance=1') > -1) jQuery('a[href="#tab1"]').tab('show');
	// 	if (document.URL.indexOf('?instance=2') > -1) jQuery('a[href="#tab1"]').tab('show');
	// 	if (document.URL.indexOf('?instance=3') > -1) jQuery('a[href="#tab2"]').tab('show');
 //    }



});
