<?php

add_action( 'after_setup_theme', 'swp1_theme_setup' );

if ( ! function_exists( 'swp1_theme_setup' ) ) {
  function swp1_theme_setup(){
    /********* TinyMCE Buttons ***********/
    add_action( 'init', 'swp1_buttons' );
  }
}

/********* TinyMCE Buttons ***********/
if ( ! function_exists( 'swp1_buttons' ) ) {
  function swp1_buttons() {
    if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
      return;
    }

    if ( get_user_option( 'rich_editing' ) !== 'true' ) {
      return;
    }

    add_filter( 'mce_external_plugins', 'swp1_add_buttons' );
    add_filter( 'mce_buttons', 'swp1_register_buttons' );
  }
}

if ( ! function_exists( 'swp1_add_buttons' ) ) {
  function swp1_add_buttons( $plugin_array ) {
    $plugin_array['swpquote'] = get_stylesheet_directory_uri().'/js/tinymce.js';
    return $plugin_array;
  }
}

if ( ! function_exists( 'swp1_register_buttons' ) ) {
  function swp1_register_buttons( $buttons ) {
    array_push( $buttons, 'swpquote' );
    return $buttons;
  }
}