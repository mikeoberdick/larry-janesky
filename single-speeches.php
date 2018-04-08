<?php
/**
 * The template for displaying the custom post type "speech" single posts
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="single-speech-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php // SET THE VARIABLES
            $image = get_field('background_image');
            $bgImage = $image['url'];
            $title = get_field('speech_title');
            $subtitle = get_field('speech_subtitle');
            $location = get_field('speech_location');
            $video = get_field('speech_video');
            $content = get_field('speech_content');
            ?>
				<div id = "videoContainer" class="container-fluid videoWrapper">
					<video src="<?php echo $video; ?>" class = "video"></video>
					<div class="playpause"></div>
				</div><!-- .container-fluid -->
                                
				<div class="container speechContentContainer">
					<div class="col-sm-12">
		                <h2><?php echo $title ?></h2>
		                <h4><?php echo $subtitle ?></h4>
		                <p><?php echo $content; ?></p>
		                <?php speeech_post_nav() ?>
			                <div class = "mb-5">
			                  <div id="commentNumber">
			                    <span>
			                      <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
			                    </span>
			                  </div>
			                  <?php comments_template(); ?>
			                </div>
	              	</div><!-- .col-sm-12 -->
				</div><!-- .container -->
			<?php endwhile; // end of the loop ?>
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .wrapper -->

<?php get_footer(); ?>