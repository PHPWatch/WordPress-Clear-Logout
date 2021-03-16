<?php
/*
Plugin Name: Clear Logout
Plugin URI: https://wordpress.org/plugins/clear-logout/
Description: A tiny WordPress plugin to clear all browser data related to the site upon logout (With `Clear-Site-Data` header).
Version: 1.1
Author: Ayesh Karunaratne
Author URI: https://aye.sh/open-source
License: GPLv2 or later
*/

/**
 * The crux of the plugin. If a global constant string named
 * "WP_CLEAR_LOGOUT_CLEAR" is set at run time, take its value, and remove
 * new lines (to prevent header injection attacks).
 *
 * If no value is set, use "*" which indicates to remove all browser
 * storage for this site (currently equivalent to "cache", "cookies", "storage", "executionContexts")
 *
 * In the interest of best security, this plugin assumes "*" to account for
 * future storage options browsers might add in the future.
 */
\add_action('wp_logout', static function () {
	$clear = \defined('WP_CLEAR_LOGOUT_CLEAR') && \is_string(\WP_CLEAR_LOGOUT_CLEAR)
		? \str_replace(["\n","\r"], '', \WP_CLEAR_LOGOUT_CLEAR)
		: '"*"';

	\header('Clear-Site-Data: ' . $clear);
});
