<?php

function meredith_form_campaign_wizard_alter(&$form, &$form_state, $form_id){
  global $theme;
  $theme_path = drupal_get_path('theme', $theme);
  
  if(isset ($form['actions']['next'])){
    $form['actions']['next']['#type'] = 'image_button';
    $form['actions']['next']['#src'] = $theme_path . '/images/bt.jpg';
  }
  if(isset ($form['actions']['prev'])){
    $form['actions']['prev']['#type'] = 'image_button';
    $form['actions']['prev']['#src'] = $theme_path . '/images/edit_bt.jpg';
  }
  if(isset ($form['actions']['finish'])){
    $form['actions']['finish']['#attributes']['style'] = 'background: url(' . $theme_path . '/images/confirm_bt.jpg)';
    $form['actions']['finish']['#attributes']['class'][] = 'confirm-button';
    $form['actions']['finish']['#value'] = '';
  }
}

?>
