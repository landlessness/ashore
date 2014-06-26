<?php
/*
Plugin Name: WordPress.com Stats Smiley Remover
Plugin URI: http://thisismyurl.com/plugins/wordpress-com-stats-smiley-remover/
Description: The WordPress.com Stats Smiley Remover quickly removes the smiley face placed in the footer of your site by the WordPress.com Stats plugin.
Author: Christopher Ross
Author URI: http://thisismyurl.com/
Version: 4.1.1
*/


/**
 * WordPress.com Stats Smiley Remover core file
 *
 * This file contains all the logic required for the plugin
 *
 * @link		http://wordpress.org/extend/plugins/wordpresscom-stats-smiley-remover/
 *
 * @package 		WordPress.com Stats Smiley Remover
 * @copyright		Copyright (c) 2008, Chrsitopher Ross
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 *
 * @since 		WordPress.com Stats Smiley Remover 1.0
 */



/**
 * thisismyurl_wpsmileyremover_header_code_function()
 *
 */
function thisismyurl_wpsmileyremover_header_code_function() {
	?>
		<!-- WordPress.com Stats Smiley Remover (start) -->
		<style type="text/css">
		img#wpstats {
			position: absolute !important;
			width: 0px !important;
			height: 0px !important;
			overflow: hidden !important;
			display: none !important;
			visibility: hidden !important;
			position: absolute !important;
			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
		</style>
		<!-- WordPress.com Stats Smiley Remover (end) -->
	<?php
}
add_action( 'wp_head','thisismyurl_wpsmileyremover_header_code_function' );
