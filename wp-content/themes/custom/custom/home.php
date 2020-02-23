<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package custom
 */

get_header();
?>
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="breadcrumbs__title"><h5 class="page-title">Blog</h5></div>
      </div>
    </div>
  </div>

  <div class="container blog_posts">
    <div class="row">
      <?php
      while (have_posts()) :
        the_post();
        ?>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php

              if ('post' === get_post_type()) :
                ?>
                <div class="entry-meta single-post-meta">
                  <a class="blog_post_title" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                    <?= the_title(); ?>
                  </a>
                  <div class="blog_post_date">
                    <?= get_the_date('Y / m / d'); ?>
                  </div>
                </div><!-- .entry-meta -->
              <?php endif; ?>
            </header><!-- .entry-header -->

            <?php custom_post_thumbnail(); ?>

          </article><!-- #post-<?php the_ID(); ?> -->
        </div>

      <?php
      endwhile; // End of the loop.
      ?>
    </div>
  </div>
<?php
get_footer();