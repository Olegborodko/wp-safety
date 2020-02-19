<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom
 */

get_header();
?>

	<div id="primary" class="content-area">
    <?php
    while ( have_posts() ) :
      the_post();
    ?>
    <div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'custom' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
    <?php

    endwhile; // End of the loop.
    ?>
	</div><!-- #primary -->

<?php
get_footer();
