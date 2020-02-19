<?php if (!defined( 'FW' )) die('Forbidden');

$options = array(
  'btn_top_text' => array(
    'type' => 'text',
    'label' => __('Btn top text', '{domain}'),
    'value' => 'CONTACT US',
  ),
  'btn_top_href' => array(
    'type' => 'text',
    'label' => __('Btn top href', '{domain}'),
    'value' => 'http://safety.loc/contact-us',
  ),
  'facebook_href' => array(
    'type' => 'text',
    'label' => __('Facebook href', '{domain}'),
    'value' => '#',
  ),
  'frontend_email' => array(
    'type' => 'text',
    'label' => __('Frontend email', '{domain}'),
    'value' => 'SafetyFirstHomeCare@gmail.com1'
  ),
  'copyright' => array(
    'type'  => 'wp-editor',
    'value' => '© 2018 All rights reserved by Safety First',
    'label' => __('Copyright', '{domain}'),
    'desc'  => __('', '{domain}'),
    'size' => 'small', // small, large
    'editor_height' => 100,
    'wpautop' => true,
    'editor_type' => false, // tinymce, html
    'shortcodes' => false // true, array('button', map')
  ),
);