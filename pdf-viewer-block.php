<?php
/**
 * @link              
 * @since             1.0
 * @package           PDF Viewer Block
 *
 * Plugin Name:       PDF Viewer Block
 * Plugin URI:        
 * Description:       PDF inline Viewer
 * Version:           1.0
 * Author:            
 * Author URI:        
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pdf-viewer-block
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Admin
 */
if (is_admin()) {
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';
}

/**
 * Public
 */
require_once plugin_dir_path( __FILE__ ) . 'public/public.php'; 