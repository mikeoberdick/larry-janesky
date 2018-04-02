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

<!-- HOMEPAGE VIDEO CAROUSEL (CONDITIONAL) -->
<?php if ( is_page('homepage') )  { ?>
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
<?php } ?>

</body>

</html>
