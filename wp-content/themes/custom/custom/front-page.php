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

  <div class="entry-content">
    <div class="tm_builder_outer_content" id="tm_builder_outer_content">
      <div class="tm_builder_inner_content tm_pb_gutters3">

        <?php
        require_once('d_blocks/home_block1.php');

        require_once('d_blocks/home_block2.php');

        require_once('d_blocks/home_block3.php');
        ?>



      </div>
    </div>
  </div>

<?php
get_footer();
