<div id = "publicSpeaking">
  <div class="container-fluid">
    <div class="row">

  <?php
    $args = array(
      'post_type' => 'speeches',
      'posts_per_page' => '10'
      );
      
      $wp_query = new WP_Query( $args );

      // SET A VARIABLE TO KEEP TRACK OF THE POST NUMBER
      $postCount = 1;
      
      // The Loop
      while ( $wp_query->have_posts() ) : $wp_query->the_post();

      // SET THE VARIABLES
        $image = get_field('background_image');
        $bgImage = $image['url'];
        $title = get_field('speech_title');
        $subtitle = get_field('speech_subtitle');
        $location = get_field('speech_location');

        //STYLE THE FIRST POST
        if ( $postCount == 1 ): ?>

        <div id = "featuredVideo" class="col-sm-12 speechVideo" style = "background-image: url('<?php echo $bgImage ?>');">
            <h2><?php echo $title ?></h2>
            <h4><?php echo $subtitle ?></h4>
            <h5><?php echo $location ?></h5>
            <a href = '#'>
              <button role = 'button' class = 'btn btn-primary btn-lg'>Watch</button>
            </a>
        </div><!-- #featuredVideo -->
        
        <?php $postCount++;
         // STYLE THE NEXT TWO POSTS DIFFERENTLY
         else : ?>

        <div class="col-sm-12 col-md-6 speechVideo" style = "background-image: url('<?php echo $bgImage ?>');">
            <h2><?php echo $title ?></h2>
            <h4><?php echo $subtitle ?></h4>
            <h5><?php echo $location ?></h5>
            <a href = '#'>
              <button role = 'button' class = 'btn btn-primary btn-lg'>Watch</button>
            </a>
        </div><!-- .col-sm-12 col-md-6 -->

        <?php $postCount++;
        endif;
        endwhile; ?>

        <script>
          var val = " <?php echo $postCount ?>"
          console.log( val );
        </script>

</div>
</div>

<div class="container">
  <h2>Want Larry At Your Next Business Event?</h2>
  <p>Larry Janesky is available to speak to your group, convention, conference  or show! Larry is a successful entrepreneur, seasoned business leader, sales trainer, author and inventor who will deliver straight talk to your audience. Larry can relate to a wide variety of audiences on the following subjects - Business Vision, Leadership, Innovation, Strategy, Team Building, Marketing, and Sales. Larry doesn't make things complicated - he delivers messages that are clear, that anyone can understand and apply. Never afraid to say it like he sees it, he can deliver a practical message with irreverence for bureaucracy and dogma.</p>
  <div>
    <a href = '<?php echo bloginfo('url'); ?>/'><button role = 'button' class = 'btn btn-primary btn-lg'>Hire Larry to Speak</button></a>
    <a href = '<?php echo bloginfo('url'); ?>/'><button role = 'button' class = 'btn btn-primary btn-lg'>View Larry's Speaking Schedule</button></a>
  </div>
</div><!-- .container -->











<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col md-3">
      [ VIDEO 4]
    </div><!-- .col-sm-12 col md-3 -->
    <div class="col-sm-12 col md-3">
      [ VIDEO 5]
    </div><!-- .col-sm-12 col md-3 -->
    <div class="col-sm-12 col md-3">
      [ VIDEO 6]
    </div><!-- .col-sm-12 col md-3 -->
    <div class="col-sm-12 col md-3">
      [ VIDEO 7]
    </div><!-- .col-sm-12 col md-3 -->
    <col-sm-12 class="col-md-4">
      [ VIDEO 8]
    </col-sm-12><!-- .col-md-4 -->
    <col-sm-12 class="col-md-4">
      [ VIDEO 9]
    </col-sm-12><!-- .col-md-4 -->
    <col-sm-12 class="col-md-4">
      [ VIDEO 10]
    </col-sm-12><!-- .col-md-4 -->
  </div><!-- .row -->
</div><!-- .container-fluid -->

<div id = "thinkDailyForm" class="container">
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