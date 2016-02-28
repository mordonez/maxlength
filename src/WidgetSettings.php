<?php

namespace Drupal\maxlength;

use Drupal\maxlength\WidgetSettingsInterface;

/**
 * @file
 *  The WidgetManager service.
 */

class WidgetSettings implements WidgetSettingsInterface {

  /**
   * {@inheritdoc}
   */
  public function getAllowedSettingsForAll() {
    $settings = array(
      'string_textfield' => array(
        'maxlength_setting' => TRUE,
      ),
      'string_textarea' => array(
        'maxlength_setting' => TRUE,
      ),
      'text_textfield' => array(
        'maxlength_setting' => TRUE,
      ),
      'text_textarea' => array(
        'maxlength_setting' => TRUE,
      ),
      'text_textarea_with_summary' => array(
        'maxlength_setting' => TRUE,
      ),
    );
    return $settings;
  }

  /**
   * {@inheritdoc}
   * @see \Drupal\maxlength\WidgetSettingsInterface::getAllowedSettings()
   */
  public function getAllowedSettings($widget_plugin_id) {
    $all_settings = $this->getAllowedSettingsForAll();
    if (!empty($all_settings[$widget_plugin_id])) {
      return $all_settings[$widget_plugin_id];
    }
    return array();
  }
}
