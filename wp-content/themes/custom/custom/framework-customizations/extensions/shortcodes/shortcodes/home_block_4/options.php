<?php if (!defined('FW')) die('Forbidden');

$options = array(
  'title' => array(
    'label'   => __('Title', '{domain}'),
    'desc'    => __('Title', '{domain}'),
    'type'    => 'textarea',
    'value'   => __('Your Care. Your Choice. Your Agency.')
  ),
  'text' => array(
    'label'   => __('Text', '{domain}'),
    'desc'    => __('Text', '{domain}'),
    'type'    => 'textarea',
    'value'   => __('Safety First Home Care is here to help with your CDPAP questions')
  ),
  'text2' => array(
    'label'   => __('Text2', '{domain}'),
    'type'    => 'textarea',
    'value'   => __('Get In Touch To Learn More')
  ),
  'button_text' => array(
    'label'   => __('Button text', '{domain}'),
    'type'    => 'text',
    'value'   => __('CONTACT US')
  ),
  'button_href' => array(
    'label'   => __('Button href', '{domain}'),
    'type'    => 'text',
    'value'   => __('#')
  ),
  'background_href'  => array(
    'label'   => __('Background href', '{domain}'),
    'type' => 'upload',
    'images_only' => true
  ),

);