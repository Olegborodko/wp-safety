<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package custom
 */

get_header();

while (have_posts()) :
  the_post();
  ?>

  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="breadcrumbs__title"><h5 class="page-title"><?=the_title()?></h5></div>
      </div>
    </div>
  </div>

  <div class="container single_post">
  <div class="row">

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php

      if ('post' === get_post_type()) :
        ?>
        <div class="entry-meta single-post-meta">
          Posted on
          <?php
          echo get_the_date( 'Y / m / d' );
          //custom_posted_by();
          ?>
        </div><!-- .entry-meta -->
      <?php endif; ?>
    </header><!-- .entry-header -->

    <?php custom_post_thumbnail(); ?>

    <div class="entry-content single-post-content">
      <?php
      the_content(sprintf(
        wp_kses(
        /* translators: %s: Name of current post. Only visible to screen readers */
          __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'custom'),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ));

      ?>
    </div><!-- .entry-content -->

  </article><!-- #post-<?php the_ID(); ?> -->
  </div>
  </div>

<?php
endwhile; // End of the loop.

get_footer();
