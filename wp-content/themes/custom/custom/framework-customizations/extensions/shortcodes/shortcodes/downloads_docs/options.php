<?php if (!defined('FW')) die('Forbidden');

$options = array(
  'title' => array(
    'label' => __('Text', '{domain}'),
    'type' => 'textarea'
  ),

  'items' => array(
    'type' => 'addable-box',
    'label' => __('Items', '{domain}'),
    'box-options' => array(
      'option_1' => array(
        'label' => 'Title',
        'type' => 'text'
      ),
      'option_2' => array(
        'label' => 'Href',
        'type' => 'text'
      ),
      'option_3' => array(
        'type'  => 'select',
        'label' => __('Image', '{domain}'),
        'choices' => array(
          'choice-1' => __('pdf', '{domain}'),
          'choice-2' => __('word', '{domain}')
        )
      )
    ),
    'template' => '{{- option_1 }}', // box title
    'limit' => 20, // limit the number of boxes that can be added
    'add-button-text' => __('Add', '{domain}'),
    'sortable' => true
  )
);