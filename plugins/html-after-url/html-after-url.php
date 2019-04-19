<?php

/*
  Plugin Name: .html after URL
  Plugin URI: https://www.aftabmuni.wordpress.com
  Description: Plugin is used to add .html after every URL of page
  Author: Aftab Muni
  Version: 1.0
  Author URI: https://www.aftabmuni.wordpress.com
 */

/*
  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  Copyright 2005-2015 Automattic, Inc.
 */

define('AMM_HAU_VERSION', '1.0');
define('AMM_HAU_PLUGIN_URL', plugin_dir_url(__FILE__));
define('AMM_HAU_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('AMM_HAU_DELETE_LIMIT', 100000);

add_action('init', 'amm_hau_rewrite_page_permalink', -1);
register_activation_hook(__FILE__, 'amm_hau_activate');
register_deactivation_hook(__FILE__, 'amm_hau_deactivate');

function amm_hau_rewrite_page_permalink() {
    global $wp_rewrite;
    if (!strpos($wp_rewrite->get_page_permastruct(), '.html')) {
        $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
    }
}

add_filter('user_trailingslashit', 'amm_hau_remove_slash', 66, 2);

function amm_hau_remove_slash($string, $type) {
    global $wp_rewrite;
    if ($wp_rewrite->using_permalinks() && $wp_rewrite->use_trailing_slashes == true && $type == 'page') {
        return untrailingslashit($string);
    } else {
        return $string;
    }
}

function amm_hau_activate() {
    global $wp_rewrite;
    if (!strpos($wp_rewrite->get_page_permastruct(), '.html')) {
        $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
    }
    $wp_rewrite->flush_rules();
}

function amm_hau_deactivate() {
    global $wp_rewrite;
    $wp_rewrite->page_structure = str_replace(".html", "", $wp_rewrite->page_structure);
    $wp_rewrite->flush_rules();
}
?>