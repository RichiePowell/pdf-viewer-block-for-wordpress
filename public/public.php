<?php
/**
 * @since      1.0
 *
 * @package    pdf-viewer-block
 * @subpackage pdf-viewer-block/public
 */

/**
 * The public-specific functionality of the plugin.
 *
 * @package    pdf-viewer-block
 * @subpackage pdf-viewer-block/public
 * @author     
 */

/**
 *
 * Enqueue styles and scripts
 *
 */
	add_action( 'wp_enqueue_scripts', 'pvb_enqueue_styles_public' );
	function pvb_enqueue_styles_public() {
		if ( has_block( 'pdf-viewer-block/standard' ) ) {
			wp_enqueue_style( 
				'pdf-viewer-block-styles', 
				plugin_dir_url( __FILE__ ) . 'css/pdf-viewer-block.css', 
				array(), 
				'', 
				'all' 
			);
			wp_enqueue_script( 
				'pdf-viewer-block-scripts', 
				plugin_dir_url( __FILE__ ) . 'js/pdf-viewer-block.js', 
				array( 'jquery' ), 
				'', 
				true 
			);
			wp_add_inline_script( 
				'pdf-viewer-block-scripts', 
				'var pdfViewerUrl = "' . plugins_url( 'pdf-viewer-block/inc/pdfjs/web/viewer.html' ) . '";', 
				'before' 
			);
		}
	}	