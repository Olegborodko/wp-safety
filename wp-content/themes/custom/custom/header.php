<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(array("use-tm-pb-builder", "header-layout-fullwidth", "content-layout-fullwidth", "footer-layout-fullwidth", "blog-grid-3-cols", "position-fullwidth", "sidebar-1-3", "header-default", "footer-default", "tm_pb_builder")); ?>>
<div id="page" class="site">

  <header id="masthead" class="site-header default" role="banner">
    <div class="mobile-panel">
      <button class="main-menu-toggle menu-toggle" aria-controls="main-menu" aria-expanded="false"><span
          class="menu-toggle-box"><span class="menu-toggle-inner"></span></span></button>
      <div class="mobile-panel__right">
      </div>
    </div>

    <div class="header-container header-btn-visibility">
      <div class="header-container_wrap container">
        <div class="header-container__flex">
          <div class="site-branding">
            <div class="site-logo site-logo--image"><a class="site-logo__link" href="" rel="home"><img
                  src="<?php echo get_template_directory_uri(); ?>/img/logos.png" alt="Safety First"
                  class="site-link__img" width="457" height="300"></a></div>
          </div>

          <nav id="site-navigation" class="main-navigation" role="navigation">
            <!--            --><?php //wp_nav_menu( [
            //              'theme_location' => 'Primary',
            //              'menu_class' => 'menu',
            //              'menu_id' => 'main-menu'
            //            ] ); ?>
            <?php
            $menu_name = 'menu-1';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
            ?>

            <nav>
              <ul id="main-menu" class="menu">
                <?php
                $count = 0;
                $submenu = false;

                foreach( $menuitems as $item ):

                $current = ( $item->object_id == get_queried_object_id() ) ? 'current_page_item' : '';

                  $link = $item->url;
                  $title = $item->title;
                  // item does not have a parent so menu_item_parent equals 0 (false)
                  if ( !$item->menu_item_parent ):

                    // save this id for later comparison with sub-menu items
                    $parent_id = $item->ID;
                    ?>

                    <li class="menu-item <?=$current?> page_item menu-item-type-post_type menu-item-object-page">
                    <a href="<?php echo $link; ?>" class="title">
                      <?php echo $title; ?>
                    </a>
                  <?php endif; ?>

                  <?php $count++; endforeach; ?>

              </ul>
            </nav>


            <!--            <ul id="main-menu" class="menu">-->
            <!--              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-19 current_page_item menu-item-1362">-->
            <!--                <a href="">Home</a></li>-->
            <!--              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1390"><a-->
            <!--                  href="">About Us</a></li>-->
            <!--              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1617"><a-->
            <!--                  href="">CDPAP</a></li>-->
            <!--              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1572"><a-->
            <!--                  href="">Downloads</a></li>-->
            <!--              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1365"><a-->
            <!--                  href="">Blog</a></li>-->
            <!--            </ul>-->
          </nav>
          <a class="header-btn btn btn-default" href="">contact us</a>
        </div>
      </div>
    </div><!-- .header-container -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">

    <div class="entry-content">
      <div class="tm_builder_outer_content" id="tm_builder_outer_content">
        <div class="tm_builder_inner_content tm_pb_gutters3">