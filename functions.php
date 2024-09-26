<?php
/**
 * Mosayco functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Mosayco
 * @since Mosayco 1.0
 */

/**
 * Enqueue editor-style.css in the editors.
 */
if ( ! function_exists( 'mosayco_editor_style' ) ) :
	/**
	 * Enqueue editor-style.css in the editors.
	 *
	 * @since Mosayco 1.0
	 * @return void
	 */
	function mosayco_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;

add_action( 'after_setup_theme', 'mosayco_editor_style' );

/**
 * Enqueue style.css on the front.
 */
if ( ! function_exists( 'mosayco_enqueue_styles' ) ) :
	/**
	 * Enqueue style.css on the front.
	 *
	 * @since Mosayco 1.0
	 * @return void
	 */
	function mosayco_enqueue_styles() {
		wp_enqueue_style(
			'mosayco-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'mosayco_enqueue_styles' );

/**
 * Enqueue custom block stylesheets.
 */
if ( ! function_exists( 'mosayco_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets.
	 *
	 * @since Mosayco 1.0
	 * @return void
	 */
	function mosayco_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'mosayco-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'mosayco_block_stylesheets' );

/**
 * Register custom block styles.
 */
if ( ! function_exists( 'mosayco_block_styles' ) ) :
	/**
	 * Register custom block styles.
	 *
	 * @since Mosayco 1.0
	 * @return void
	 */
	function mosayco_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'mosayco' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;

add_action( 'init', 'mosayco_block_styles' );

/**
 * Register pattern categories.
 */
if ( ! function_exists( 'mosayco_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Mosayco 1.0
	 * @return void
	 */
	function mosayco_pattern_categories() {

		register_block_pattern_category(
			'mosayco_page',
			array(
				'label'       => __( 'Pages', 'mosayco' ),
				'description' => __( 'A collection of full page layouts.', 'mosayco' ),
			)
		);
	}
endif;

add_action( 'init', 'mosayco_pattern_categories' );

/**
 * Register block binding sources.
 */
if ( ! function_exists( 'mosayco_register_block_bindings' ) ) :
	/**
	 * Register the copyright block binding source.
	 *
	 * @since Mosayco 1.0
	 * @return void
	 */
	function mosayco_register_block_bindings() {
		register_block_bindings_source(
			'mosayco/copyright',
			array(
				'label'              => _x( '&copy; YEAR', 'Label for the copyright placeholder in the editor', 'mosayco' ),
				'get_value_callback' => 'mosayco_copyright_binding',
			)
		);
	}
endif;

/**
 * Register block binding callback function for the copyright.
 */
if ( ! function_exists( 'mosayco_copyright_binding' ) ) :
	/**
	 * Callback function for the copyright block binding source.
	 *
	 * @since Mosayco 1.0
	 * @return string Copyright text.
	 */
	function mosayco_copyright_binding() {
		$copyright_text = sprintf(
			/* translators: 1: Copyright symbol or word, 2: Year */
			esc_html__( '%1$s %2$s', 'mosayco' ),
			'&copy;',
			wp_date( 'Y' )
		);

		return $copyright_text;
	}
endif;

add_action( 'init', 'mosayco_register_block_bindings' );
