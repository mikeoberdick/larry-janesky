<?php
/**
 * Setup Custom Template Tags
 *
 * @package understrap
 */

if ( ! function_exists( 'speech_post_nav' ) ) :
	function speeech_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );
		if ( ! $next && ! $previous ) {
			return;
		}
		?>
				<nav id = "speechNavigation" class="container navigation post-navigation">
					<h2 class="sr-only"><?php _e( 'Post navigation', 'understrap' ); ?></h2>
					<div class="row nav-links justify-content-between">
						<?php
							if ( get_previous_post_link() ) {
								previous_post_link( '<button class="nav-previous btn btn-primary btn-lg">%link</button>', _x( '<i class="fa fa-angle-left mr-3"></i>Previous Speech', 'Previous post link', 'understrap' ) );
							}
							if ( get_next_post_link() ) {
								next_post_link( '<button class="nav-next btn btn-primary btn-lg">%link</button>',     _x( 'Next Speech<i class="fa fa-angle-right ml-3"></i>', 'Next post link', 'understrap' ) );
							}
						?>
					</div><!-- .nav-links -->
				</nav><!-- #speechNavigation -->

		<?php
	}
endif;

//SHORTEN EXCERPT
function d4tw_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'd4tw_excerpt_length', 999 );

//CUSTOMIZE POST EXCERPT
if ( ! function_exists( 'understrap_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function understrap_custom_excerpt_more( $more ) {
		return '';
	}
}
add_filter( 'excerpt_more', 'understrap_custom_excerpt_more' );
if ( ! function_exists( 'understrap_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function understrap_all_excerpts_get_more_link( $post_excerpt ) {
		return $post_excerpt . ' [...]<p><a class = "read-more-link" href="' . esc_url( get_permalink( get_the_ID() )) . '">Read Full Post</a></p>';
	}
}
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );