<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function wega_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['busi_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('wega Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['busi_settings']['show_front_content'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show content and sidebar on front page'),
    '#default_value' => theme_get_setting('show_front_content','wega'),
    '#description' => t('Check this option to show content and sidebar on the front page.'),
  );
  $form['busi_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs','wega'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['busi_settings']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front Page Slideshow'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['busi_settings']['slideshow']['slideshow_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show slideshow'),
    '#default_value' => theme_get_setting('slideshow_display','wega'),
    '#description'   => t("Check this option to show Slideshow in front page. Uncheck to hide."),
  );
    $form['busi_settings']['slideshow']['slide'] = array(
    '#markup' => t('You can change the description and URL of each slide in the following Slide Setting fieldsets.'),
  );
  $form['busi_settings']['slideshow']['slide1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 1'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['busi_settings']['slideshow']['slide1']['slide1_desc'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide1_desc','wega'),
  );
  $form['busi_settings']['slideshow']['slide1']['slide1_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide1_url','wega'),
  );
  $form['busi_settings']['slideshow']['slide2'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 2'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['busi_settings']['slideshow']['slide2']['slide2_desc'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide2_desc','wega'),
  );
  $form['busi_settings']['slideshow']['slide2']['slide2_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide2_url','wega'),
  );
  $form['busi_settings']['slideshow']['slide3'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 3'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['busi_settings']['slideshow']['slide3']['slide3_desc'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide3_desc','wega'),
  );
  $form['busi_settings']['slideshow']['slide3']['slide3_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide3_url','wega'),
  );
  
  
  form['busi_settings']['slideshow']['slide4'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 4'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['busi_settings']['slideshow']['slide4']['slide3_desc'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide4_desc','wega'),
  );
  $form['busi_settings']['slideshow']['slide4']['slide4_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide4_url','wega'),
  );
  $
  
  
  $form['busi_settings']['slideshow']['slideimage'] = array(
    '#markup' => t('To change the Slide Images, Replace the img1.jpg, img2.jpg, img3.jpg and img4.jpg in the images folder of the wega theme folder.'),
  );
  $form['busi_settings']['footer'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['busi_settings']['footer']['footer_copyright'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show copyright text in footer'),
    '#default_value' => theme_get_setting('footer_copyright','wega'),
    '#description'   => t("Check this option to show copyright text in footer. Uncheck to hide."),
  );
  $form['busi_settings']['footer']['footer_credits'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show theme credits in footer'),
    '#default_value' => theme_get_setting('footer_credits','wega'),
    '#description'   => t("Check this option to show copyright text in footer. Uncheck to hide."),
  );
}
