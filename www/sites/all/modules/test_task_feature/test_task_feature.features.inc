<?php
/**
 * @file
 * test_task_feature.features.inc
 */

/**
 * Implements hook_node_info().
 */
function test_task_feature_node_info() {
  $items = array(
    'article' => array(
      'name' => t('Article'),
      'base' => 'node_content',
      'description' => t('Use <em>articles</em> for time-sensitive content like news, press releases or blog posts.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'page' => array(
      'name' => t('Basic page'),
      'base' => 'node_content',
      'description' => t('Use <em>basic pages</em> for your static content, such as an \'About us\' page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

/**
 * Implements hook_paragraphs_info().
 */
function test_task_feature_paragraphs_info() {
  $items = array(
    'images' => array(
      'name' => 'images',
      'bundle' => 'images',
      'locked' => '1',
    ),
    'text' => array(
      'name' => 'text',
      'bundle' => 'text',
      'locked' => '1',
    ),
  );
  return $items;
}
