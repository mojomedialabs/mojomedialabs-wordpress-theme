<?php
/**
 * Template Name: Homepage Template
 * Description: Template for the site Home page.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

add_filter('body_class','mojo_homepage_class_names');
function mojo_homepage_class_names($classes) {
// add 'class-name' to the $classes array
  $classes[] = 'home-page';
// return the $classes array
  return $classes;
}
get_header(); ?>
	<div id="primary">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
					</div><!-- .entry-content -->
					<footer class="entry-meta">
					</footer><!-- .entry-meta -->
				</article><!-- #post-<?php the_ID(); ?> -->
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>