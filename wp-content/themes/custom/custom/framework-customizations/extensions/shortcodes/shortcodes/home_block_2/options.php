<?php if (!defined('FW')) die('Forbidden');

$options = array(
  'title' => array(
    'label'   => __('Title', '{domain}'),
    'desc'    => __('Title', '{domain}'),
    'type'    => 'textarea',
    'value'   => __('Your Care In Your Hands')
  ),
  'text' => array(
    'label'   => __('Text', '{domain}'),
    'desc'    => __('Text', '{domain}'),
    'type'    => 'textarea',
    'value'   => __('Take your care into your own hands. Hire and manage someone you know, love, and trust to be your caretaker instead of a stranger. A friend or a family member can take care of you!')
  ),
  'box1' => array(
    'type' => 'tab',
    'title' => __('Box1', '{domain}'),
    'options' => array(
      'box1_title'  => array(
        'type' => 'text',
        'value' => 'Your Care In Your Hands'
      ),
      'box1_text'  => array(
        'type' => 'textarea',
        'value' => 'The New York State CDPAP (Consumer Directed Personal Assistance Program) allows patients to select, hire, and manage their own caregivers. This program allows the Medicaid eligible elderly and disabled individuals to take their care into their own hands.'
      ),
    ),
  ),

  'box2' => array(
    'type' => 'tab',
    'title' => __('Box2', '{domain}'),
    'options' => array(
      'box2_title'  => array(
        'type' => 'text',
        'value' => 'You Are In Charge'
      ),
      'box2_text'  => array(
        'type' => 'textarea',
        'value' => 'If you require long term care, home care, or nursing, CDPAP allows you to pick and manage your caregivers. CDPAP puts you in charge. There are only a few exceptions to who you can hire. Contact us to find out more.'
      ),
    ),
  ),

  'box3' => array(
    'type' => 'tab',
    'title' => __('Box3', '{domain}'),
    'options' => array(
      'box3_title'  => array(
        'type' => 'text',
        'value' => 'Safety & Security'
      ),
      'box3_text'  => array(
        'type' => 'textarea',
        'value' => 'CDPAP allows patients that need personal care to feel safe and secure by hiring someone they trust and know to take care of them. Many people do not feel comfortable letting a stranger into their home. Contact us to find out more.'
      ),
    ),
  ),

  'box4' => array(
    'type' => 'tab',
    'title' => __('Box4', '{domain}'),
    'options' => array(
      'box4_title'  => array(
        'type' => 'text',
        'value' => 'Peace Of Mind'
      ),
      'box4_text'  => array(
        'type' => 'textarea',
        'value' => 'Hiring someone you know, will let you achieve peace of mind and ultimately improve your health. Trusting your caregiver reduces stress and let’s you focus on your health. Your caregiver will also have peace of mind since they will be compensated for their work. Peace of mind for the patient and the caregiver.'
      ),
    ),
  ),
);