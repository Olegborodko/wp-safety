<?php if (!defined('FW')) die('Forbidden');

$options = array(
  'text' => array(
    'type'  => 'wp-editor',
    //'value' => 'text',
    'reinit' => true,
    'teeny' => false,
    'label' => __('Text', '{domain}'),
    //'desc'  => __('Description', '{domain}'),
    //'help'  => __('Help tip', '{domain}'),
    'size' => 'large', // small, large
    'editor_height' => 200,
    'wpautop' => true,
    'editor_type' => false, // tinymce, html
    //'shortcodes' => true // true, array('button', map')
  )
);