//Automatically generate filler content height to ensure footer is on bottom of the page
jQuery(document).ready(function() {
	jQuery('#js-heightControl').css('height', jQuery(window).height() - jQuery('html').height() +'px');
});

//Dropdown on hover
jQuery('ul.navbar-nav li.dropdown').hover(function() {
	jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
	jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

//Archive dropdown functionality to send to correct page
jQuery(document).ready(function() {
	jQuery('#archiveDropdown').on('change', function(){
	    var month = jQuery('#month').val();
	    var year = jQuery('#year').val();
	    jQuery('#archiveFormSubmit').attr('href', '/' + year + '/' + month);
	});
});

//Post Slider in Modal
  jQuery('.postLauncher').click( function() {
      jQuery('.carousel-item').removeClass('active');
      var count = jQuery(this).data("count");
    jQuery('.carousel-item').eq(count).addClass('active');
  });

  // Video Play Button Overlay

jQuery('.video').parent().click(function () {
    if(jQuery(this).children(".video").get(0).paused){
        jQuery(this).children(".video").get(0).play();
        jQuery(this).children(".playpause").fadeOut();
    }else{
       jQuery(this).children(".video").get(0).pause();
        jQuery(this).children(".playpause").fadeIn();
    }
});