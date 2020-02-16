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

        <?php
        require_once('d_blocks/home_block1.php');

        require_once('d_blocks/home_block2.php');

        require_once('d_blocks/home_block3.php');

        require_once('d_blocks/home_block4.php');

        require_once('d_blocks/home_block5.php');

        require_once('d_blocks/home_block6.php');

        require_once('d_blocks/home_block7.php');
        ?>

<!--  <div id="tm_builder_outer_content">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">-->
<!--          1-->
<!--        </div>-->
<!--        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">-->
<!--          2-->
<!--        </div>-->
<!--        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">-->
<!--          3-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->

<?php
get_footer();
