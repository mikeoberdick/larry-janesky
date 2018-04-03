<div id = "homepage">

<div class="container-fluid heroSection" style = "background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/hero_bg.jpg);">
	<div class="textContainer">
		<div class = "container">
			<div class="row">
				<div class = "col-sm-12">
					<h1>Teacher.</h1>
				</div><!-- .col-sm-12 -->
			</div><!-- .row -->
		</div>
	</div><!-- .textContainer -->
</div><!-- .container-fluid -->

<!-- ABOUT LARRY SECTION -->
<div id = "aboutLarry" class="container-fluid">
	<div class="container">
			<div class="col-md-8 offset-md-2">
      			<h2>About Larry</h2>
      			<h4>Business Leader & Trainer</h4>
      			<p>Larry Janesky is an authority on creating and growing businesses for the benefit of business owners, employees and customers.  Larry is a highly successful author of five books, acclaimed speaker, inventor with 29 patents, business leader wtih 31 years of real world accountability and success, and has big plans for the future.</p>
      			<p>Larry's goal is to improve the lives of millions of business owners, their employees, their customers, and humanity in general, through business education, development and excellence.</p>
      			<a href = '#'><button role = 'button' class = 'btn btn-primary'>Learn More</button></a>
 			</div><!-- .col-sm-8 -->
	</div><!-- .container -->
</div><!-- .container-fluid -->

<!-- EXPERT COMMUNICATOR SECTION -->
<div id = "expertCommunicator" class = "container-fluid">
	<div class="container">
		<div class="row">

			<!-- LEFT SECTION -->
			<div id = "communicatorLeftSection" class="col-md-6">
				<h2>Expert Communicator</h2>
				<h4>Public Speaking and Speeches</h4>
				<p>Larry has presented at a number of high level organizations where he has given hes expert advice.  Subjects ranging from entrepreneurship, business ownership, leadership, slaes, and personal development.</p>
				<a href = '<?php echo bloginfo('url'); ?>/public-speaking'><button role = 'button' class = 'btn btn-primary'>View All Videos</button></a>
			</div><!-- .col-md-6 -->

			<!-- VIDEO CAROUSEL -->
			<div id = "communicatorRightSection" class="col-md-6">
				<ul class="bxslider">
					<?php
				        $args = array(
				          'post_type' => 'speeches'
				          );
				          
				          $video_slider_query = new WP_Query( $args );
				          
				          // The Loop
				          while ( $video_slider_query->have_posts() ) : $video_slider_query->the_post();

				          // SET THE VARIABLES
				            $video = get_field('speech_video');
				        ?>

				        <li>
				        	<video class = "vid" src = "<?php echo $video; ?>"></video>
				        </li>
						
						<?php endwhile; ?>
            			<?php wp_reset_postdata(); ?>

				</ul><!-- .hpVideoSlider -->
			</div><!-- .col-md-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .container-fluid -->

<!-- HIGHEST CALLING SECTION -->
<div id = "highestCalling">
	<div class = "container">
		<div class="row">
		
		<!-- LEFT SECTION -->
		<div id = "bookLeftSection" class="col-md-5">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/highest_calling.png" alt = "Larry Janesky's Highest Calling" title = "Larry Janesky's Highest Calling">
		</div><!-- .col-md-5 -->

		<!-- RIGHT SECTION -->
		<div id = "bookRightSection" class="col-md-7">
			<h2>"The Highest Calling" Book</h2>
			<p>You will laugh, you will cry, and you will learn.  The Highest Calling is more than an inspirational book.  For those that seek, it is a powerful entrepreneurial education; one that will improve the lives of millions for a lifetime.</p>
			<div class="row">
				<div class="col-sm-12 col-md-3 bookAward">2010<br>NEW ENGLAND<br>book festival</div>
				<div class="col-sm-12 col-md-3 bookAward">2010 Winner<br>Small Business<br>Book Awards</div>
				<div class="col-sm-12 col-md-3 bookAward">2011<br>National Indie<br>Excellence Award</div>
				<div class="col-sm-12 col-md-3 buyBook"><a href = '#'><button role = 'button' class = 'btn btn-primary'>Buy</button></a></div>
			</div><!-- .row -->
		</div><!-- .col-md-7 -->

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #highestCalling -->

<!-- DEALER NETWORK SECTION -->
<div id = "dealerNetwork" class="container-fluid" style = "background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/dealer_network.png);">
	<div class="container">
			<div class="col-md-6 offset-md-6 text-center">
      			<h2>International Dealer Networks</h2>
      			<h4>Network of Companies that sell Larry's Products</h4>
      			<a href = '#'><button role = 'button' class = 'btn btn-primary'>View Larry's Businesses</button></a>
      			<div id = "dealerNetworkCarousel">
      				<div class="hpLogoSlider">

      					<?php while( have_rows('business_logos') ): the_row();
	      					//VARIABLES
	      					$image = get_sub_field('logo');
	      					$size = 'hp-logo';
	      					$thumb = $image['sizes'][ $size ]; ?>
						
						<img src = "<?php echo $thumb; ?>">

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
						
					</div><!-- .hpLogoSlider -->
      			</div><!-- #dealerNetworkCarousel -->
      			
      			<div id = "carouselCaption">
      				<h2>122</h2>
      				<h4>Dealers Worldwide</h4>
      			</div><!-- #carouselCaption -->
 			</div><!-- .col-sm-8 -->
	</div><!-- .container -->
</div><!-- #dealerNetwork -->

<!-- THINK DAILY BLOG SECTION -->
<div id = "thinkDaily" class="container-fluid" style = "background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/think_daily_bg.jpg);">
	<div class="container">
		<div class="row">
			
			<!-- LEFT SECTION -->
			<div id = "thinkDailyLeftSection" class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/todays_message.png);" class = "mb-4" alt="Think Daily" title = "Think Daily">
				<p>Think Daily, and Think Daily for Businesspeople are daily messages from Larry meant to motivate, educate, inspire, and question - but most of all, to invite you to THINK about the issues that are important to you each day.</p>
				<a href = '<?php echo bloginfo('url'); ?>/think-daily'><button role = 'button' class = 'btn btn-primary btn-lg mb-5'>View All Think Daily Messages</button></a>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app_store.png);" class = "mr-3" alt="Grab the app on the App Store">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/play_store.png);" alt="Grab the app on the Google Play Store">
				</div>
			</div><!-- .col-md-6 -->

			<!-- RIGHT SECTION -->
			<div id = "thinkDailyRightSection" class="col-md-6">
				<div id = "hpPostCarousel">
      				<div class="hpPostSlider">
					
					<?php
						global $post;
						$args = array( 'posts_per_page' => '10' );
						$postsList = get_posts( $args );

							foreach( $postsList as $post ) :
								setup_postdata( $post ); ?>

							<div class = "hpPost">
								<div class = "postDate" style = "background: url('<?php the_post_thumbnail_url(); ?>');">
					        		<span class = "month"><?php echo get_the_date('M'); ?></span>
					        		<span class = "day"><?php echo get_the_date('j'); ?></span>
				        		</div><!-- .postDate -->
				        		<h5><?php echo the_title(); ?></h5>
				        		<p><?php echo get_the_excerpt(); ?></p>
							</div><!-- .hpPost -->
				        		
							<?php endforeach;
				        	wp_reset_postdata(); ?>
      					
					</div><!-- .hpPostSlider -->
      			</div><!-- .hpPostCarousel -->
			</div><!-- .col-md-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #thinkDaily -->

<!-- RECOGNITION AND AWARDS SECTION -->
<div id = "preRecognition" class="container-fluid">
	
</div>
<div id = "recognition" class = "container-fluid">
	<div class="container">
		<div class="row">

			<!-- LEFT SECTION -->
			<div id = "recognitionLeftSection" class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneur_of_the_year.png"" alt="Larry Janesky: 2015 Entrepreneur of the Year">
			</div><!-- .col-md-6 -->

			<!-- RIGHT SECTION -->
			<div id = "recognitionRightSection" class="col-md-6">
				<h2>Recognition and Awards</h2>
				<h4>Third Party Acknowledgment</h4>
				<div class="row mb-4">
					<?php while( have_rows('lj_awards') ): the_row();
	      					//VARIABLES
	      					$image = get_sub_field('award');
	      					$img = $image[url]; ?>

	      					<div class="col-md-4 award"><img src = "<?php echo $img; ?>" class = "img-responsive"></div>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

				</div><!-- .row -->
				<a href = '#' class = "mt-5"><button role = 'button' class = 'btn btn-primary'>View All Awards</button></a>
			</div><!-- .col-md-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .container-fluid -->

<!-- BUSINESS TIMELINE -->
<div id = "businessTimeline">
	<div class = "container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Larry's Business Timeline</h2>
				<h4>The History of Larry's Business</h4>
			</div>
		</div><!-- 	.row -->
	</div><!-- 	.container -->
	<div class="container-fluid">
		<div class = "text-center">
			[TIMELINE ITEMS]
		</div>
		<div class = "text-center">
			[TIMELINE]
		</div>
	</div><!-- 	.container-fluid -->
</div><!-- 	#businessTimeline -->
</div><!-- #homepage -->