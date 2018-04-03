<div id = "publicSpeaking">
  <div class="container-fluid">
    <div class="row">
      <?php
        $args = array(
          'post_type' => 'speeches',
          'posts_per_page' => '3'
          );
          
          $top_wp_query = new WP_Query( $args );

          // SET A VARIABLE TO KEEP TRACK OF THE POST NUMBER
          $postCount = 1;
          
          // The Loop
          while ( $top_wp_query->have_posts() ) : $top_wp_query->the_post();

          // SET THE VARIABLES
            $image = get_field('background_image');
            $bgImage = $image['url'];
            $title = get_field('speech_title');
            $subtitle = get_field('speech_subtitle');
            $location = get_field('speech_location');
            $video = get_field('speech_video');
            $content = get_field('speech_content');

            //STYLE THE FIRST POST
            if ( $postCount == 1 ): ?>
              <div id = "featuredVideo" class="col-sm-12 speechVideo" style = "background-image: url('<?php echo $bgImage ?>');">

            <?php else : ?>
            <div class="col-sm-12 col-md-6 secondaryVideo speechVideo" style = "background-image: url('<?php echo $bgImage ?>');">
            <?php endif; ?>

                <div class="contentContainer">
                  <h2><?php echo $title ?></h2>
                  <h4><?php echo $subtitle ?></h4>
                  <h5><?php echo $location ?></h5>
                  <div>
                      <a href = "#" data-toggle="modal" data-target="#video-<?php echo $postCount; ?>">
                        <button role = 'button' class = 'btn btn-primary btn-lg'>Watch</button>
                      </a>
                    </div>
                </div><!-- .contentContainer -->
              </div><!-- .speechVideo -->

            <!-- VIDEO MODAL -->
            <div class="modal fade primaryModal" id = "video-<?php echo $postCount; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                            <div id = "videoContainer" class="container-fluid">
                                <video controls src="<?php echo $video; ?>" class = "w-100"></video>
                            </div><!-- .container-fluid -->
                              <div id = "contentContainer" class="container mt-3">
                                <div class="row">
                                  <div class="col-md-8">
                                    <h2><?php echo $title ?></h2>
                                    <h4><?php echo $subtitle ?></h4>
                                    <p><?php echo $content; ?></p>
                                    <div class = "mb-5">
                                      <div id="commentNumber">
                                        <span>
                                          <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                                        </span>
                                      </div>
                                      <?php comments_template(); ?>
                                    </div>
                                  </div><!-- .col-md-8 -->


                                  <div id = "sidebarVideos" class = "col-md-4">
                                  <?php
                                  global $post;
                                  $i = "0";
                                  $args = array( 'post_type' => 'speeches','posts_per_page' => 3, 'orderby' => 'rand' );
                                  $rand_posts = get_posts( $args );
                                  foreach ( $rand_posts as $post ) : 
                                  // SET THE VARIABLES FOR SIDEBAR VIDEOS
                                  $image = get_field('background_image');
                                  $bgImage = $image['url'];
                                    setup_postdata( $post ); ?>

                                    <div class = "sidebarVid" style = "background-image: url('<?php echo $bgImage ?>');">
                                      <a href = "<?php the_permalink(); ?>">
                                        <h5>
                                        <?php the_title(); ?>
                                      </h5>
                                      </a>
                                    </div>

                                  <?php endforeach; ?>
                                  </div>
                                  <?php wp_reset_postdata(); ?>

                                </div><!--  .row -->
                              </div><!-- #contentContainer -->
                        </div><!--  .modal-body -->
                    </div><!--  .modal-content -->
                </div><!--  .modal-dialog -->
              </div><!--  .videoModal -->



            <?php $postCount++;
            endwhile; ?>
      </div><!-- .row -->
  </div><!-- .container-fluid -->

<div id = "bookLarry" class="container">
  <h2>Want Larry At Your Next Business Event?</h2>
  <p>Larry Janesky is available to speak to your group, convention, conference  or show! Larry is a successful entrepreneur, seasoned business leader, sales trainer, author and inventor who will deliver straight talk to your audience. Larry can relate to a wide variety of audiences on the following subjects - Business Vision, Leadership, Innovation, Strategy, Team Building, Marketing, and Sales. Larry doesn't make things complicated - he delivers messages that are clear, that anyone can understand and apply. Never afraid to say it like he sees it, he can deliver a practical message with irreverence for bureaucracy and dogma.</p>
  <div>
    <a href = '<?php echo bloginfo('url'); ?>/' class = "mr-3"><button role = 'button' class = 'btn btn-primary btn-lg'>Hire Larry to Speak</button></a>
    <a href = '<?php echo bloginfo('url'); ?>/'><button role = 'button' class = 'btn btn-primary btn-lg'>View Larry's Speaking Schedule</button></a>
  </div>
</div><!-- #bookLarry -->

<div class="container-fluid">
  <div class="row">

      <?php
        $args = array(
          'post_type' => 'speeches',
          'posts_per_page' => '7',
          'offset' => '3'
          );
          
          $bottom_wp_query = new WP_Query( $args );

          // SET A VARIABLE TO KEEP TRACK OF THE POST NUMBER
          $postCount = 4;
          
          // The Loop
          while ( $bottom_wp_query->have_posts() ) : $bottom_wp_query->the_post();

          // SET THE VARIABLES
            $image = get_field('background_image');
            $bgImage = $image['url'];
            $title = get_field('speech_title');
            $subtitle = get_field('speech_subtitle');
            $location = get_field('speech_location');

            //STYLE THE FIRST POST
            if ( $postCount == 4 || $postCount == 5 || $postCount == 6 || $postCount == 7 ): ?>
            <div class="col-sm-12 col-md-3 secondaryVideo speechVideo" style = "background-image: url('<?php echo $bgImage ?>');">
            <?php else : ?>
            <div class="col-sm-12 col-md-6 secondaryVideo speechVideo" style = "background-image: url('<?php echo $bgImage ?>');">
            <?php endif; ?>
                <div class="contentContainer">
                  <h2><?php echo $title ?></h2>
                  <h4><?php echo $subtitle ?></h4>
                  <h5><?php echo $location ?></h5>
                  <div>
                      <a href = "#" data-toggle="modal" data-target="#video-<?php echo $postCount; ?>">
                        <button role = 'button' class = 'btn btn-primary btn-lg'>Watch</button>
                      </a>
                    </div>
                </div><!-- .contentContainer -->       
            </div><!-- .secondaryVideo -->

            <!-- MODAL -->
            <div class="modal fade" id = "video-<?php echo $postCount; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                            <div id = "videoContainer" class="container-fluid">
                                <video controls src="<?php echo $video; ?>" class = "w-100"></video>
                            </div><!-- .container-fluid -->
                              <div id = "contentContainer" class="container mt-3">
                                <div class="row">
                                  <div class="col-md-8">
                                    <h2><?php echo $title ?></h2>
                                    <h4><?php echo $subtitle ?></h4>
                                    <p><?php echo $content; ?></p>
                                    <div class = "mb-5">
                                      <div id="commentNumber">
                                        <span>
                                          <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                                        </span>
                                      </div>
                                      <?php comments_template(); ?>
                                    </div>
                                  </div><!-- .col-md-8 -->
                                    <div class="col-md-4">
                                      [ RELATED VIDEOS ]
                                    </div><!-- .col-md-4 -->
                                </div><!--  .row -->
                              </div><!-- #contentContainer -->
                        </div><!--  .modal-body -->
                    </div><!--  .modal-content -->
                </div><!--  .modal-dialog -->
              </div><!--  .videoModal -->
            
            <?php $postCount++;
            endwhile; ?>
  </div><!-- .row -->
</div><!-- .container-fluid -->

<div class="container blogSignup">
  <img src= "<?php echo get_stylesheet_directory_uri(); ?>/img/think_daily_logo.png" alt="Think Daily by Larry Janesky">
  <p>Join the over 20,000 people who receive Larry's Daily Inspiring Messages</p>
  <div>
    <!-- NEWSLETTER FORM  -->
    <form class="form-inline">
        
        <label class="sr-only" for="name">Name</label>
        <input type="text" class="form-control mr-sm-2" id="name" placeholder="Name">

        <label class="sr-only" for="email">Email</label>
      <input type="text" class="form-control mr-sm-2" id="email" placeholder="Email">

      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
  </div>
  <p class = "privacy">Larry values privacy and will never sell your information</p>
</div>

</div><!-- #publicSpeaking -->