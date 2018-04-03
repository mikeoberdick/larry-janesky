<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="index-wrapper">
  <div id="content" tabindex="-1">
    <div id = "thinkDaily">
      <div id = "thinkDailyBlogHeader" class="container-fluid" style = "background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/think_daily_bg.jpg');">
        <div class = "container">
        	<div class="row">
        		<div id = "blogHeaderLeft" class="col-md-6">
        			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/think_daily_logo.png" alt="Think Daily by Larry Janesky">
              <p>Think Daily, and Think Daily for Businesspeople are daily messages from Larry meant to motivate, educate, inspire, and question - but most of all, to invite you to THINK about the issues that are important to you each day.  Sign up today.</p>
            </div><!-- .col.md-6 -->
            <div class="col-md-4 offset-md-1">
              <div id = "blogBlogSignup"">
              <p>Join the over 20,000 people who receive Larry's Daily Inspiring Messages!</p>
              <!-- NEWSLETTER FORM  -->
              <form class="form-inline">
                <label class="sr-only" for="name">Name</label>
                <input type="text" class="form-control mr-sm-2" id="name" placeholder="Name">

                <label class="sr-only" for="email">Email</label>
                <input type="text" class="form-control mr-sm-2" id="email" placeholder="Email">
                <p class = "privacy">Larry values privacy and will never sell your information</p>
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </form>
              </div><!-- #blogBlogSignup -->
              </div><!-- .col-md-6 -->
          </div><!-- .row -->
        </div><!-- .container -->
      </div><!-- .container-fluid -->

<main id = "main" class = "site-main">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      <h2 id = "blogPageTitle">Today's Think Daily Message</h2>
      <?php 
      $args = array(
        'posts_per_page' => '1',
      );

      $featuredPostQuery = new WP_Query($args);

      if (  $featuredPostQuery->have_posts() ) : while (  $featuredPostQuery->have_posts() ) :  $featuredPostQuery->the_post(); ?>

      <div id = "featuredPostContainer">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <div id="featuredPostCard">
            <div class = "postDate" style = "background: #9e7d0b url('<?php the_post_thumbnail_url(); ?>');">
            <span class = "month"><?php echo get_the_date('M'); ?></span>
            <span class = "day"><?php echo get_the_date('j'); ?></span>
          </div><!-- .postDate -->
           <h5 class = "postTitle"><a href = "<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
            <p><?php echo get_the_excerpt(); ?></p>
            <hr class = "postSep">
            [COMMENT COUNT]
          </div><!-- .postCard -->  
          </article><!-- #post-## -->
    </div><!-- #postContainer -->
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>
    </div><!-- .col-sm-12 -->
    </div><!-- .row -->
    
  </div><!-- .container -->

  <div id = "postContainer" class="container">

    <?php 
      $args = array(
        'posts_per_page' => '4',
        'offset' => '1'
      );

      $remainingPostQuery = new WP_Query($args);

    $postCount = 1; //SETUP COUNT FOR STYLING ODD/EVEN POSTS>
    if ( $remainingPostQuery->have_posts() ) : while ( $remainingPostQuery->have_posts() ) : $remainingPostQuery->the_post(); ?>

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
          <h5 class = "postTitle"><a href = "<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
          <p><?php echo get_the_excerpt(); ?></p>
          <hr class = "postSep">
            [COMMENT COUNT]
        </div><!-- .postCard -->  
    </article><!-- #post-## -->

<?php
$postCount++; endwhile; endif;
?>
  </div><!-- #postContainer -->
  <div id="archiveLink"> 
       <a href = '<?php echo bloginfo('url'); ?>/archive'>View Full Think Daily Archive</a>
  </div>
</main>


<div id = "blogBottomBanner" class="container-fluid">
  <div class="container">
    <div class = "row">
      <div class="col-md-5 offset-md-1">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/think_white.png" alt="Think Daily by Larry Janesky" title="Think Daily by Larry Janesky">
        <p>Think Daily App now available for Iphone and Android</p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app_store.png" alt="Get Think Daily on the App Store" title="Get Think Daily on the App Store" class = "mr-3">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/play_store.png" alt="Get Think Daily on the Google Play Store" title="Get Think Daily on the Google Play Store">
      </div><!-- .col-md-6 -->

      <div class="col-md-4">
        <img id = "mobileImage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobile.png">
      </div><!-- .col-md-6 -->
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- #blogBottomBanner -->

    </div><!-- #thinkDaily -->
  </div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>