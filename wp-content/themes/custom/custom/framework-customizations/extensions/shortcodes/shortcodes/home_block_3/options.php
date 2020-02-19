<?php if (!defined('FW')) die('Forbidden');

$options = array(
  'title' => array(
    'label'   => __('Title', '{domain}'),
    'desc'    => __('Title', '{domain}'),
    'type'    => 'textarea',
    'value'   => __('New York Consumer Directed Personal Assistance Program')
  ),
  'text' => array(
    'label'   => __('Text', '{domain}'),
    'desc'    => __('Text', '{domain}'),
    'type'    => 'textarea',
    'value'   => __('Hire your own caregiver. Know and trust the person who will be responsible for your well-being. No more strangers, no more guessing, no more stress!')
  ),
  'item1' => array(
    'type' => 'tab',
    'title' => __('Item1', '{domain}'),
    'options' => array(
      'item1_title'  => array(
        'type' => 'text',
        'value' => 'Someone You Trust & Care About'
      ),
      'item1_image'  => array(
        'type' => 'upload',
        'images_only' => true
      ),
    ),
  ),

  'item2' => array(
    'type' => 'tab',
    'title' => __('Item2', '{domain}'),
    'options' => array(
      'item2_title'  => array(
        'type' => 'text',
        'value' => 'No More Stangers At Home'
      ),
      'item2_image'  => array(
        'type' => 'upload',
        'images_only' => true
      ),
    ),
  ),

  'item3' => array(
    'type' => 'tab',
    'title' => __('Item3', '{domain}'),
    'options' => array(
      'item3_title'  => array(
        'type' => 'text',
        'value' => 'Manage Your Own Caregiver'
      ),
      'item3_image'  => array(
        'type' => 'upload',
        'images_only' => true
      ),
    ),
  ),

  'item4' => array(
    'type' => 'tab',
    'title' => __('Item4', '{domain}'),
    'options' => array(
      'item4_title'  => array(
        'type' => 'text',
        'value' => 'Your Caregiver Gets Paid'
      ),
      'item4_image'  => array(
        'type' => 'upload',
        'images_only' => true
      ),
    ),
  ),


);