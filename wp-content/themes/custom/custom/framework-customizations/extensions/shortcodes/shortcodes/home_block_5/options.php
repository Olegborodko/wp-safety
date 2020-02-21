<?php if (!defined('FW')) die('Forbidden');

$options = array(
  'items' => array(
  'type'  => 'addable-box',
  'label' => __('Items', '{domain}'),
  //'desc'  => __('Description', '{domain}'),
  //'help'  => __('Help tip', '{domain}'),
  'box-options' => array(
    'option_1' => array(
      'type' => 'text', //textarea
    ),
    'option_2' => array(
        'type'  => 'wp-editor',
        'size' => 'large',
        'editor_height' => 160,
        'attr'  => array( 'class' => 'admin-wp-editor-shortcode', 'data-foo' => 'bar' ),
    ),
  ),
  'template' => '{{- option_1 }}', // box title
  //'box-controls' => array( // buttons next to (x) remove box button
    //'control-id' => '<small class="dashicons dashicons-smiley"></small>',
  //),
  'limit' => 20, // limit the number of boxes that can be added
  'add-button-text' => __('Add', '{domain}'),
  'sortable' => true
  )
);