<?php
/**
 * The Archive template file.
 *
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="archive-wrapper">
  <div id="content" tabindex="-1">
    <div id = "thinkDaily">
      <div id = "thinkDailyHeader" class="container-fluid" style = "background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/think_daily_bg.jpg');">
        <div class = "container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/think_daily_logo.png" alt="Think Daily by Larry Janesky">

          <!-- ARCHIVE DROP DOWNS -->
              <div id = "archiveDropdowns" class = ".col-md-3 .offset-md-3">
                <form id = "archiveDropdown">
                  <div id="monthSelectContainer">
                    <select id = "month" name = "month">
                    <?php
                    $monthName = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                    for ($i=0; $i < count($monthName); $i++)
                      { $mn = 1 + $i;
                        if($mn == date("m"))
                          { echo "<option selected value=" . $mn . ">" . $monthName[$i] . "</option> \n"; }
                        else
                          { echo "<option value=" . $mn . ">" . $monthName[$i] . "</option> \n"; } } ?> 
                    </select>
                  </div><!-- .selectContainer -->
                    
                    <div id="yearSelectContainer">
                      <select id = "year" name = "year">
                      <?php
                        $year = date("Y");
                        $minYr = $year - 3;
                        $maxYr = $year + 1;
                          echo $year;
                          echo "<br />" . $minYr . "<br />" . $maxYr . "<br />";
                            for($y=$minYr; $y < $maxYr; $y++)
                              {
                            if($y==$year)
                              { echo "<option selected value" . $y . ">" . $y . "</option> \n"; }
                            else
                              {echo "<option value" . $y . ">" . $y . "</option> \n"; } } ?> 
                      </select>
                    </div><!-- .selectContainer -->
                    
                    <a href = "#" id = "archiveFormSubmit">Go</a>
                </form>   
              </div><!-- #archiveDropdowns --> 
            </div><!-- .col-sm-12 -->
          </div><!-- .row -->
        </div><!-- .container -->
      </div><!-- .container-fluid -->

<main id = "main" class = "site-main">
  <div id = "postContainer" class="container">

    <?php $postCount = 1; //SETUP COUNT FOR STYLING ODD/EVEN POSTS ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php if ( $postCount % 2 == 0 ): ?>
      <div class = "col-md-6 even">
    <?php else : ?>
      <div class = "col-md-6 offset-md-6 odd">
        <?php endif; ?>
        <div class="postCard">
          <div class = "postDate" style = "background: #9e7d0b url('<?php the_post_thumbnail_url(); ?>');">
          <span class = "month"><?php echo get_the_date('M'); ?></span>
          <span class = "day"><?php echo get_the_date('j'); ?></span>
        </div><!-- .postDate -->
          <h5><?php echo the_title(); ?></h5>
          <p><?php echo get_the_excerpt(); ?></p>
        </div><!-- .postCard -->  
    </article><!-- #post-## -->

<?php
 $postCount++;
  endwhile;
  endif; ?>

  </div><!-- #postContainer -->
</main>

<!-- The pagination component -->
<?php understrap_pagination(); ?>

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

    </div><!-- #thinkDaily -->
  </div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>