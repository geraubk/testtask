<?php

/**
 * @file
 * Stub file for "page" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "page" theme hook.
 *
 * See template for list of available variables.
 *
 * @param array $variables
 *   An associative array of variables, passed by reference.
 *
 * @see page.tpl.php
 *
 * @ingroup theme_preprocess
 */
function cbtheme_preprocess_page(array &$variables) {
  $i18n = module_exists('i18n_menu');

  // Footer Primary nav.
  $variables['footer_primary_nav'] = FALSE;
  if ($variables['main_menu']) {
    // Load the tree.
    $tree = menu_tree_page_data(variable_get('menu_main_links_source', 'main-menu'));

    // Localize the tree.
    if ($i18n) {
      $tree = i18n_menu_localize_tree($tree);
    }

    // Build links.
    $variables['footer_primary_nav'] = menu_tree_output($tree);

    // Provide default theme wrapper function.
    $variables['footer_primary_nav']['#theme_wrappers'] = array('menu_tree__primary');
  }

  // Copyright
  $variables['copyright_text'] = t('Copyright @year All rights reserved', array('@year' => date('Y')));
}