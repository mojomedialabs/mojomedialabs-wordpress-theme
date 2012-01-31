<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<?php
		if (is_page() and ($notfound != '1') and !is_front_page()) {
			$current_page = $post->ID;

			while ($current_page) {
				$page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");

				$current_page = $page_query->post_parent;
			}

			$parent_id = $page_query->ID;

			$parent_title = $page_query->post_title;

			if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_status != 'attachment'")) { ?>
				<div class="subpage-menu">
					<ul>
						<?php wp_list_pages('depth=1&sort_column=menu_order&title_li=&child_of=' . $parent_id); ?>
					</ul>
				</div>
			<?php }
		}
	?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
