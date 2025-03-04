<?php
/**
 * @since      1.0
 *
 * @package    pdf-viewer-block
 * @subpackage pdf-viewer-block/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * @package    pdf-viewer-block
 * @subpackage pdf-viewer-block/admin
 * @author     
 */

/**
 *
 * Enqueue styles and scripts
 *
 */
 	if ( ! function_exists( 'register_block_type' ) ) {
		// Gutenberg is not active.
		return;
	}

	add_action( 'enqueue_block_editor_assets', 'pvb_enqueue_styles_admin' );
	function pvb_enqueue_styles_admin() {
		wp_enqueue_style( 
			'pvb-admin-styles', 
			plugin_dir_url( __FILE__ ) . 'css/admin.css', 
			array(), 
			'', 
			'all' 
		);
		wp_register_script(
			'pvb-admin-scripts',
			plugins_url( 'js/block.js', __FILE__ ),
			array( 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n', 'wp-editor' ),
			filemtime( plugin_dir_path( __FILE__ ) . 'js/block.js' ),
			true
		);
		wp_enqueue_script( 'pvb-admin-scripts' );
	}
	register_block_type( 'pdf-viewer-block/standard', 
		array(
			'editor_script' => 'pvb-admin-scripts',
			'editor_style'  => 'pvb-admin-styles',
		)
	); 