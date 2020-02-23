<?php if (!defined('FW')) die('Forbidden');

$options = array(
  'items' => array(
    'type' => 'addable-box',
    'label' => __('Items', '{domain}'),
    'box-options' => array(
      'option_1' => array('type' => 'text'),
      'option_2' => array('type' => 'textarea'),
    ),
    'template' => '{{- option_1 }}', // box title
    'limit' => 40, // limit the number of boxes that can be added
    'add-button-text' => __('Add', '{domain}'),
    'sortable' => true
  )
);