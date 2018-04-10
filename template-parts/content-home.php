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
			<div class="col-md-8 offset-md-4">
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
				<p>Larry has presented at a number of high level organizations where he has given hes expert advice.  Subjects ranging from entrepreneurship, business ownership, leadership, sales, and personal development.</p>
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

				        <li id = "videoContainer" class="videoWrapper">
				        	<video class = "vid video" src = "<?php echo $video; ?>"></video>
				        	<div class="playpause"></div>
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
		<div id = "bookRightSection" class="col-md-7 offset-md-5">
			<h2>"The Highest Calling" Book</h2>
			<p>You will laugh, you will cry, and you will learn.  The Highest Calling is more than an inspirational book.  For those that seek, it is a powerful entrepreneurial education; one that will improve the lives of millions for a lifetime.</p>
			<div class="row">
				<div class="col-sm-12 col-md-3 bookAward">2010<br>NEW ENGLAND<br>book festival</div>
				<div class="col-sm-12 col-md-3 bookAward">2010 Winner<br>Small Business<br>Book Awards</div>
				<div class="col-sm-12 col-md-3 bookAward">2011<br>National Indie<br>Excellence Award</div>
				<div class="col-sm-12 col-md-3 buyBook"><a href = 'https://shop.thehighestcallingbook.com/'><button role = 'button' class = 'btn btn-primary'>Buy</button></a></div>
			</div><!-- .row -->
		</div><!-- .col-md-7 -->

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #highestCalling -->

<!-- DEALER NETWORK SECTION -->
<div id = "dealerNetwork" class="container-fluid" style = "background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/dealer_network.png);">
	<div class="container">
			<div id = "dealerNetworkRight" class="col-md-6 offset-md-6 text-center">
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
<div id = "hpThinkDaily" class="container-fluid" style = "background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/think_daily_bg.jpg);">
	<div class="container">
		<div class="row">
			
			<!-- LEFT SECTION -->
			<div id = "thinkDailyLeftSection" class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/todays_message.png);" class = "mb-4" alt="Think Daily" title = "Think Daily">
				<p>Think Daily, and Think Daily for Businesspeople are daily messages from Larry meant to motivate, educate, inspire, and question - but most of all, to invite you to THINK about the issues that are important to you each day.</p>
				<a href = '<?php echo bloginfo('url'); ?>/think-daily'><button role = 'button' class = 'btn btn-primary btn-lg mb-5'>View All Think Daily Messages</button></a>
				<div>
					<a href="https://itunes.apple.com/us/app/think-daily/id351702459?mt=8" alt = "App Store" title = "Grab the app on the App Store"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app_store.png);" class = "mr-3"></a>
					<a href="#" alt = "Google Play Store" title="Grab the app on the Google Play Store"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/play_store.png);"></a>
				</div>
			</div><!-- .col-md-6 -->

			<!-- RIGHT SECTION -->
			<div id = "thinkDailyRightSection" class="col-md-6">
				<div id = "hpPostCarousel">
      				<div class="hpPostSlider">
					
<?php 
   // the query
   $hpQuery = new WP_Query( array(
      'posts_per_page' => 10,
      'nopaging' => 'true'
   )); 

$postCount = 0;
if ( $hpQuery->have_posts() ) : ?>
  <?php while ( $hpQuery->have_posts() ) : $hpQuery->the_post(); ?>


							<div class = "hpPost">
								<div class = "postDate" style = "background: #9e7d0b url('<?php the_post_thumbnail_url(); ?>');">
					        		<span class = "month"><?php the_date('M'); ?></span>
					        		<span class = "day"><?php the_date('j'); ?></span>
				        		</div><!-- .postDate -->
				        		<h5 class = "postTitle"><a class = "postLauncher" href = "#" data-toggle="modal" data-target="#postModal" data-count="<?php echo $postCount; ?>"><?php the_title(); ?></a></h5>
				        		<p><?php echo the_excerpt(); ?></p>
							</div><!-- .hpPost -->	


  <?php $postCount++; endwhile; endif;?>
  <?php wp_reset_postdata(); ?>
      					
					</div><!-- .hpPostSlider -->
      			</div><!-- .hpPostCarousel -->


<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
        <div id="postModalCarousel" class="carousel slide" data-interval="false">
  <div class="carousel-inner">


<?php 
      $args = array(
        'posts_per_page' => '10'
      );

    $postsForModal = new WP_Query($args);

    $postCount = 1; //SETUP COUNT FOR STYLING ODD/EVEN POSTS>
    if ( $postsForModal->have_posts() ) : while ( $postsForModal->have_posts() ) : $postsForModal->the_post(); ?>


    <div class="carousel-item">
      <div class="container-fluid modalHeaderContainer mb-3">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_header.png" alt="Blog Single Post Header"></img>
      </div><!-- .container-fluid -->

                  <div class="container modalContentContainer blogModalContentContainer">
                    <div class="row">
                      <div class="col-md-12">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <div class = "mb-5">
                          <div id="commentNumber">
                            <span>
                              <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                            </span>
                          </div>
                          <?php comments_template(); ?>
                        </div>
                      </div><!-- .col-md-12 -->
                    </div><!--  .row -->
                    <div class = "postDate" style = "background: #9e7d0b url('<?php the_post_thumbnail_url(); ?>');">
                      <span class = "month"><?php the_date('M'); ?></span>
                      <span class = "day"><?php the_date('j'); ?></span>
                    </div><!-- .postDate -->
                  </div><!-- #modalPostBodyContainer -->

    </div><!-- .carousel-item -->

<?php
$postCount++; endwhile; endif; wp_reset_postdata();
?>
    
  </div><!-- .carousel-inner -->
  <a class="carousel-control-prev" href="#postModalCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#postModalCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div><!-- .modal -->





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

					<?php while( have_rows('awards_for_homepage') ): the_row();
	      					//VARIABLES
	      					$image = get_sub_field('hp_award');
	      					$img = $image[url]; ?>

	      					<div class="col-md-4 award"><img src = "<?php echo $img; ?>" class = "img-responsive"></div>

						<?php endwhile; ?>

				</div><!-- .row -->
				<a href = '#' class = "mt-5"><button role = 'button' class = 'btn btn-primary'>View All Awards</button></a>
			</div><!-- .col-md-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .container-fluid -->

<!-- BUSINESS TIMELINE -->
<div id = "businessTimeline">
	<div class = "container">
		<div id = "timelineHeader" class="row">
			<div class="col-sm-12 text-center">
				<h2>Larry's Business Timeline</h2>
				<h4>The History of Larry's Business</h4>
			</div>
		</div><!-- 	.row -->
	</div><!-- 	.container -->
	<div class="container-fluid">


<div class="timelineSlider">
	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>1</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>2</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>3</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>4</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>5</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>6</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>7</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>8</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>9</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>10</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>11</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>12</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>13</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>14</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>15</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>16</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>17</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>18</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>19</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-md-6">
				<img src="http://via.placeholder.com/350x150" alt="">
			</div>
			<div class="col-md-6">
				<h4>20</h4>
				<h4>Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur laborum, maxime placeat enim voluptatibus eos! Labore, et, illo!</p>
			</div>
		</div>
	</div>
</div><!-- .timelineSlider -->

<div id="timelineSliderNavTopDates">
	<span>1998</span>
	<span>2004</span>
	<span>2012</span>
</div>

<div class="timelineSliderNav">
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
	<div><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
</div>

<div id="timelineSliderNavBottomDates">
	<span>2002</span>
	<span>2008</span>
	<span>2017</span>
</div>

	</div><!-- 	.container-fluid -->
</div><!-- 	#businessTimeline -->
</div><!-- #homepage -->