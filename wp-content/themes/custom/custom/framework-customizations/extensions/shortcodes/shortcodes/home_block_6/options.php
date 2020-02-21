<?php if (!defined('FW')) die('Forbidden');

$options = array(
  'title' => array(
    'label' => __('Title', '{domain}'),
    'type' => 'text',
    'value' => __('Testimonials')
  ),
  'image'  => array(
    'label' => __('Image', '{domain}'),
    'type' => 'upload',
    'images_only' => true
  ),
  'name' => array(
    'label' => __('Name', '{domain}'),
    'type' => 'text',
    'value' => __('Tara Levine')
  ),
  'city' => array(
    'label' => __('city', '{domain}'),
    'type' => 'text',
    'value' => __('New York')
  ),
  'text' => array(
    'label' => __('Text', '{domain}'),
    'type' => 'textarea',
    'value' => __('Safety First helped me set up CDPAP for my mom. We were able to get her the caregiver she needed. They held our hand through the whole process. Thanks a million!')
  ),

);