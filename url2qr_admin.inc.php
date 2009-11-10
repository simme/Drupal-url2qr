<?php
/**
 * Show settings
 */
function _url2qr_settings() {
  $form = array();
  
  $form['url2qr_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Block title'),
    '#description' => t('Leave empty for none.'),
    '#default_value' => variable_get('url2qr_title', ''),
  );
  
  $form['url2qr_alt_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Alt text for QR-code image'),
    '#description' => t('%url% will be replaced with the current URL.'),
    '#default_value' => variable_get('url2qr_alt_text', '%url%'),
  );
  
  $form['url2qr_description'] = array(
    '#type' => 'textarea',
    '#title' => t('Description'),
    '#description' => t('Supply a description text for your visitors. Rendered below the image.'),
    '#default_value' => variable_get('url2qr_description', ''),
  );
  
  $form = system_settings_form($form);
  return $form;
}