<?php

/**
 * @file
 * Provide views data for our custom styled_google_map.
 */

/**
 * Implements hook_views_data().
 */
function styled_google_map_views_data() {
  $data['views']['styled_google_map'] = [
    'title' => t('Styled Google Map'),
    'help' => t('Display the values of geofields on styled Google map.'),
    'style' => [
      'id' => 'styled_google_map',
    ],
  ];
  $data['views']['google_map_control'] = [
    'title' => t('Google map custom control'),
    'help' => t('Provide markup text for the area.'),
    'area' => [
      'id' => 'google_map_control',
    ],
  ];
  return $data;
}
