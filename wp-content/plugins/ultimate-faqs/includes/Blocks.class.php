<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'ewdufaqBlocks' ) ) {
/**
 * Class to handle plugin Gutenberg blocks
 *
 * @since 2.0.0
 */
class ewdufaqBlocks {

	public function __construct() {

		add_action( 'init', array( $this, 'add_faq_blocks' ) );
		
		add_filter( 'block_categories', array( $this, 'add_block_category' ) );
	}

	/**
	 * Add the Gutenberg block to the list of available blocks
	 * @since 2.0.0
	 */
	public function add_faq_blocks() {

		if ( ! function_exists( 'render_block_core_block' ) ) { return; }

		$this->enqueue_assets();   

		$args = array(
			'attributes' => array(
				'post_count' => array(
					'type' => 'integer',
				),
				'include_category' => array(
					'type' => 'string',
				),
				'exclude_category' => array(
					'type' => 'string',
				),
			),
			'editor_script'   	=> 'ewd-ufaq-blocks-js',
			'editor_style'  	=> 'ewd-ufaq-blocks-css',
			'render_callback' 	=> 'ewd_ufaq_faqs_shortcode',
		);

		register_block_type( 'ultimate-faqs/ewd-ufaq-display-faq-block', $args );

		$args = array(
			'attributes' => array(
				'post_count' => array(
					'type' => 'integer',
				),
			),
			'editor_script'   	=> 'ewd-ufaq-blocks-js',
			'editor_style'  	=> 'ewd-ufaq-blocks-css',
			'render_callback' 	=> 'ewd_ufaq_recent_faqs_shortcode',
		);

		register_block_type( 'ultimate-faqs/ewd-ufaq-recent-faqs-block', $args );

		$args = array(
			'attributes' => array(
				'post_count' => array(
					'type' => 'integer',
				),
			),
			'editor_script'   	=> 'ewd-ufaq-blocks-js',
			'editor_style'  	=> 'ewd-ufaq-blocks-css',
			'render_callback' 	=> 'ewd_ufaq_popular_faqs_shortcode',
		);

		register_block_type( 'ultimate-faqs/ewd-ufaq-popular-faqs-block', $args );

		$args = array(
			'attributes' => array(
				'post_count' => array(
					'type' => 'integer',
				),
				'include_category' => array(
					'type' => 'string',
				),
				'exclude_category' => array(
					'type' => 'string',
				),
			),
			'editor_script'   	=> 'ewd-ufaq-blocks-js',
			'editor_style'  	=> 'ewd-ufaq-blocks-css',
			'render_callback' 	=> 'ewd_ufaq_search_faqs_shortcode',
		);

		register_block_type( 'ultimate-faqs/ewd-ufaq-search-block', $args );

		$args = array(
			'editor_script'   	=> 'ewd-ufaq-blocks-js',
			'editor_style'  	=> 'ewd-ufaq-blocks-css',
			'render_callback' 	=> 'ewd_ufaq_submit_faq_shortcode',
		);

		register_block_type( 'ultimate-faqs/ewd-ufaq-submit-faq-block', $args );
	}

	/**
	 * Create a new category of blocks to hold our block
	 * @since 2.0.0
	 */
	public function add_block_category( $categories ) {
		
		$categories[] = array(
			'slug'  => 'ewd-ufaq-blocks',
			'title' => __( 'Ultimate FAQs', 'ultimate-faqs' ),
		);

		return $categories;
	}

	/**
	 * Register the necessary JS and CSS to display the block in the editor
	 * @since 2.0.0
	 */
	public function enqueue_assets() {

		wp_register_script( 'ewd-ufaq-blocks-js', EWD_UFAQ_PLUGIN_URL . '/assets/js/ewd-ufaq-blocks.js', array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor' ), EWD_UFAQ_VERSION );
		wp_register_style( 'ewd-ufaq-blocks-css', EWD_UFAQ_PLUGIN_URL . '/assets/css/ewd-ufaq-blocks.css', array( 'wp-edit-blocks' ), EWD_UFAQ_VERSION );
	}
}

}