<?php if (!defined('FW')) die('Forbidden');

$options = array(
  'title' => array(
    'label'   => __('Title', '{domain}'),
    'desc'    => __('Title', '{domain}'),
    'type'    => 'textarea',
    'value'   => __('New York State Consumer Directed Personal Assistance Program (CDPAP)')
  ),
  'text' => array(
    'label'   => __('Text', '{domain}'),
    'desc'    => __('Text', '{domain}'),
    'type'    => 'textarea',
    'value'   => __('When you have to worry about your health, the last thing you should worry about is your caregiver. You can pick, hire, and manage someone you trust.')
  ),
  'link_href' => array(
    'label'   => __('Link href', '{domain}'),
    'desc'    => __('', '{domain}'),
    'type'    => 'text',
    'value'   => __('#')
  ),
  'form_shortcode' => array(
    'label'   => __('Form shortcode', '{domain}'),
    'desc'    => __('', '{domain}'),
    'type'    => 'text',
    'value'   => __('[contact-form-7 id="26" title="home_form"]')
  ),
);