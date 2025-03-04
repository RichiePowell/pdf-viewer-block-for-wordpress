=== PDF Viewer Block ===
Contributors: 
Tags: pdf, viewer, block, gutenberg, embed
Requires at least: 5.0
Tested up to: 6.4
Stable tag: 1.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

PDF Viewer Block allows you to embed PDF documents inline within your content using the Gutenberg block editor.

== Description ==

PDF Viewer Block is a simple WordPress plugin that adds a custom block to the Gutenberg editor, allowing you to embed PDF documents directly into your content. Instead of just linking to PDF files, visitors can view them right on your website.

Features:
* Easy to use Gutenberg block
* Embed PDFs directly in your content
* Customizable width and height
* Responsive design
* Uses Mozilla's PDF.js for rendering PDFs
* No third-party services required

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/pdf-viewer-block` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. In the block editor, search for "PDF Viewer" and add the block to your content.
4. Click on the "Upload PDF" button to select a PDF from your media library or upload a new one.
5. Optional: Adjust the width and height settings in the block's inspector panel.

== Frequently Asked Questions ==

= Does this plugin work with the Classic Editor? =

No, this plugin requires the Gutenberg block editor.

= How are PDFs rendered? =

PDFs are rendered using Mozilla's PDF.js library, which converts PDFs to HTML5 canvas elements for display in browsers without requiring additional plugins.

= Can I customize the appearance of the PDF viewer? =

You can set custom width and height for the PDF viewer through the block settings. Default size is 100% width and 700px height.

== Screenshots ==

1. Block in the editor
2. PDF viewer on the frontend

== Changelog ==

= 1.0 =
* Initial release

== Credits ==

This plugin uses Mozilla's PDF.js library for rendering PDFs. 