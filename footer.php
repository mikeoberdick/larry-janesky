<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<?php if ( is_active_sidebar( 'footer_1') || is_active_sidebar( 'footer_2') || is_active_sidebar( 'footer_3') ) { ?>

<div class="wrapper" id="wrapper-footer" style = "background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/footer_bg.png);">

	<div class="<?php echo esc_html( $container ); ?>">

		<h5>Larry Janesky</h5>

	<div id = "footerWidgets" class = "row">

		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_1'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_2'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_3'); ?>
		</div>

	</div><!-- #footerWidgets -->

	</div><!-- .container -->

	<?php } ?>

</div><!-- wrapper end -->

</div><!-- #page-wrapper -->

<?php wp_footer(); ?>

<!-- FAMILY IMAGE GALLERY LIGHTBOX (CONDITIONAL) -->

<?php if ( is_page('family') )  { ?>
	
<script type="text/javascript">;
	( function( $ ) {
		jQuery( '.swipebox' ).swipebox( {
			hideBarsDelay : 10000, // delay before hiding bars on desktop
			loopAtEnd: false // true will return to the first image after the last image is reached
		} );

} )( jQuery );
</script>

<?php } ?>

<?php if ( is_page('homepage') )  { ?>

<!-- HOMEPAGE VIDEO CAROUSEL -->

	<script>
  		jQuery(document).ready(function(){
    	jQuery('.bxslider').bxSlider({
    		mode: 'vertical',
    		auto: true,
    		autoHover: true,
    		minSlides: 3,
    		maxSlides: 3,
    		moveSlides: 1,
    		adaptiveHeight: true,
    		video: true,
    		pager: false,
    		onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
    			jQuery('.active-slide').removeClass('active-slide');
    			jQuery('.bxslider > li').eq(currentSlideHtmlObject + 4).addClass('active-slide');
    		},
    		onSliderLoad: function () {
    			jQuery('.bxslider > li').eq(4).addClass('active-slide')
    		},
    	});
  		});
  	</script>

<!-- HOMEPAGE LOGO CAROUSEL -->

  	<script>
		jQuery(document).ready(function(){
  			jQuery('.hpLogoSlider').slick({
  				centerMode: true,
  				slidesToShow: 1,
  				nextArrow: '<img class = "sliderArrowLeft" src = "<?php echo get_stylesheet_directory_uri(); ?>/img/slider/arrow_left.png">',
  				prevArrow: '<img class = "sliderArrowRight" src = "<?php echo get_stylesheet_directory_uri(); ?>/img/slider/arrow_right.png">',
  				variableWidth: true,
  				responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 1
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 1
			      }
			    }
			  ]
		  });
		});
	</script>

<!-- HOMEPAGE POST CAROUSEL -->

	<script>
		jQuery(document).ready(function(){
  			jQuery('.hpPostSlider').slick({
  				vertical: true,
  				centerMode: true,
  				autoplay: false,
  				draggable: false,
  				slidesToShow: 3,
  				nextArrow: '<img class = "postSliderArrowBottom" src = "<?php echo get_stylesheet_directory_uri(); ?>/img/slider/arrow_left.png">',
  				prevArrow: '<img class = "postSliderArrowTop" src = "<?php echo get_stylesheet_directory_uri(); ?>/img/slider/arrow_right.png">'
		  });
		});
	</script>

<!-- HOMEPAGE TIMELINE FUNCTIONALITY -->

<script>

	jQuery('.timelineSlider').slick({
    slidesToShow: 3,
    centerMode: true,
    centerPadding: '100px',
    variableWidth: true,
 	slidesToScroll: 1,
 	fade: false,
 	infinite: true,
	useTransform: true,
 	speed: 400,
 	cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
 });

//Timeline Dates
var dates = ["01/01/1978", "04/01/1979", "02/01/1982", "09/01/1986", "08/01/1989", "07/01/1991", "03/01/1993", "12/01/1997", "08/01/2001", "01/01/2002", "03/01/2005", "04/01/2006", "01/01/2008", "07/01/2011", "09/01/2012", "06/01/2014", "08/01/2016", "10/01/2016", "02/01/2017", "04/01/2018"];

//Main function. Draw your circles.
function makeCircles() {
  
//Set day, month and year variables for the math
    var first = dates[0];
    var last = dates[dates.length - 1];

    var firstMonth = parseInt(first.split('/')[0]);
    var firstDay = parseInt(first.split('/')[1]);
    var firstYear = parseInt(first.split('/')[2]);


    var lastMonth = parseInt(last.split('/')[0]);
    var lastDay = parseInt(last.split('/')[1]);
    var lastYear = parseInt(last.split('/')[2]);
  
//Integer representation of the last day
    var lastInt = ( ((lastYear - firstYear) * 365) + (lastMonth - firstMonth) * 30) + (lastDay - firstDay);

//Draw first date circle
  jQuery(".timelineSliderNav").append('<span style="left: ' + 0 + '%;"><i class="fa fa-circle" aria-hidden="true"></i></span>');
 
//Loop through middle dates
  for (i = 1; i < dates.length - 1; i++) {
    var thisMonth = parseInt(dates[i].split('/')[0]);
    var thisDay = parseInt(dates[i].split('/')[1]);
    var thisYear = parseInt(dates[i].split('/')[2]);
    
    //Integer representation of the date
    var thisInt =  ( ((thisYear - firstYear) * 365) + (thisMonth - firstMonth) * 30) + (thisDay - firstDay);
    
    //Integer relative to the first and last dates
      var relativeInt = thisInt / lastInt;

    //Draw the date circle
      jQuery(".timelineSliderNav").append('<span style="left: ' + relativeInt * 100 + '%;"><i class="fa fa-circle" aria-hidden="true"></i></span>');
  }
  
  //Draw the last date circle
  jQuery(".timelineSliderNav").append('<span style="left: ' + 99 + '%;"><i class="fa fa-circle" aria-hidden="true"></i></span>');
}

makeCircles();

 jQuery('.timelineSliderNav')
 	.on('init', function(event, slick) {
 		jQuery('.timelineSliderNav .slick-slide.slick-current').addClass('is-active');
 	})
 	.slick({
 		slidesToShow: 20,
	 	variableWidth: true,
 		dots: false,
 		focusOnSelect: false,
 		infinite: false,
 		responsive: [{
 			breakpoint: 1024,
 			settings: {
 				slidesToShow: 5,
 				slidesToScroll: 5,
 			}
 		}, {
 			breakpoint: 640,
 			settings: {
 				slidesToShow: 4,
 				slidesToScroll: 4,
			}
 		}, {
 			breakpoint: 420,
 			settings: {
 				slidesToShow: 3,
 				slidesToScroll: 3,
		}
 		}]
 	});

 jQuery('.timelineSlider').on('afterChange', function(event, slick, currentSlide) {
 	jQuery('.timelineSliderNav').slick('slickGoTo', currentSlide);
 	var currrentNavSlideElem = '.timelineSliderNav .slick-slide[data-slick-index="' + currentSlide + '"]';
 	jQuery('.timelineSliderNav .slick-slide.is-active').removeClass('is-active');
 	jQuery(currrentNavSlideElem).addClass('is-active');
 });

 jQuery('.timelineSliderNav').on('click', '.slick-slide', function(event) {
 	event.preventDefault();
 	var goToSingleSlide = jQuery(this).data('slick-index');

 	jQuery('.timelineSlider').slick('slickGoTo', goToSingleSlide);
 });

</script>
<?php } ?>

</body>

</html>
