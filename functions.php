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
if (!function_exists('mosayco_editor_style')) :
    /**
     * Enqueue editor-style.css in the editors.
     *
     * @return void
     * @since Mosayco 1.0
     */
    function mosayco_editor_style()
    {
        add_editor_style(get_parent_theme_file_uri('assets/css/editor-style.css'));
    }
endif;

add_action('after_setup_theme', 'mosayco_editor_style');

/**
 * Enqueue style.css on the front.
 */
if (!function_exists('mosayco_enqueue_styles')) :
    /**
     * Enqueue style.css on the front.
     *
     * @return void
     * @since Mosayco 1.0
     */
    function mosayco_enqueue_styles()
    {
        wp_enqueue_style(
            'mosayco-style',
            get_parent_theme_file_uri('style.css'),
            array(),
            wp_get_theme()->get('Version')
        );

        global $is_safari;

        if($is_safari || wp_is_mobile()) {
            wp_enqueue_script(
                'scroll-timeline-polyfill', // unique handle
                'https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js',
                [], // required dependencies for blocks
                '1.0',
                false
            );
        }
    }
endif;

add_action('wp_enqueue_scripts', 'mosayco_enqueue_styles');

/**
 * Enqueue custom block stylesheets.
 */
if (!function_exists('mosayco_block_stylesheets')) :
    /**
     * Enqueue custom block stylesheets.
     *
     * @return void
     * @since Mosayco 1.0
     */
    function mosayco_block_stylesheets()
    {
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
                'src' => get_parent_theme_file_uri('assets/css/button-outline.css'),
                'ver' => wp_get_theme(get_template())->get('Version'),
                'path' => get_parent_theme_file_path('assets/css/button-outline.css'),
            )
        );
    }
endif;

add_action('init', 'mosayco_block_stylesheets');


require_once get_template_directory() . '/inc/init.php';

/**
 * Register custom block styles.
 */
if (!function_exists('mosayco_block_styles')) :
    /**
     * Register custom block styles.
     *
     * @return void
     * @since Mosayco 1.0
     */
    function mosayco_block_styles()
    {
        register_block_style(
            'core/list',
            array(
                'name' => 'checkmark-list',
                'label' => __('Checkmark', 'mosayco'),
                'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
            )
        );


        register_block_style(
            array('core/button'),
            array(
                'name' => 'cast-shadow',
                'label' => __('Cast shadow', 'mosayco'),
                'inline_style' => '
                .is-style-cast-shadow { position: relative; --gradient-degrees: 73deg; padding: 1px;}
                .is-style-cast-shadow .wp-block-button__link { 
                    position: relative; border-radius: 15px;
                    box-shadow: 0 0 var(--wp--preset--spacing--20) rgba(0,0,0,0.1);
                    border: none;
                    background-color: white;
                    color: black;
                }
               
                .is-style-cast-shadow:not([data-shown]):before {
				    opacity: 0 !important;		   
				}
				.is-style-cast-shadow:before {
                      position: absolute;
                      top: -1px;
                      bottom: -1px;
                      left: -1px;
                      right: -1px;
                      content: "";
                      z-index: 0;
                      border-radius: 18px;
                      background: linear-gradient(var(--gradient-degrees), var(--wp--preset--color--accent-1), rgba(0,0,0,0.2), var(--wp--preset--color--accent-1-dark));
				}',
            )
        );

        register_block_style(
            array('core/group'),
            array(
                'name' => 'highlight-card',
                'label' => __('Card', 'mosayco'),
                'inline_style' => '
    
                .wp-block-group:has(.is-style-highlight-card) { 
                    z-index: 0;
                }
                
                .is-style-highlight-card[data-shown="true"] {
                    animation: rotateGradient 10s linear !important;
                    animation-iteration-count: infinite !important;
                }
                
                .is-style-highlight-card { 
                    position: relative; 
                    border-radius: 15px; 
                    --gradient-degrees: 0deg;
                }
				.is-style-highlight-card:not([data-shown]):before {
				    opacity: 0 !important;		   
				}
				.is-style-highlight-card:before {				   
				      transition: opacity 100ms linear;
                      position: absolute;
                      top: -1.5px;
                      bottom: -1.5px;
                      left: -1.5px;
                      right: -1.5px;
                      content: "";
                      z-index: -1;
                      border-radius: inherit;
                      background: linear-gradient(var(--gradient-degrees), var(--wp--preset--color--accent-1), rgba(0,0,0,0.2), var(--wp--preset--color--accent-1-dark));
				}',
            )
        );


        register_block_style(
            array('core/heading', 'core/post-title'),
            array(
                'name' => 'huge-typography',
                'label' => __('Huge', 'mosayco'),
                'inline_style' => '
				.is-style-huge-typography {
					font-size: var(--wp--custom--font-size--huge) !important;
				}',
            )
        );

        register_block_style(
            'core/cover',
            array(
                'name' => 'scroll-motion-appear',
                'label' => __('Scroll Motion', 'mosayco'),
                'inline_style' => '
                .is-style-scroll-motion-appear > .wp-block-cover__image-background {
                  animation: parallaxing linear;
                  animation-timeline: view();
                  --parallax-from: -200px;
                  --parallax-to: 200px;
                  height: calc(100% + 200px);
                }
               
                
                @keyframes parallaxing {
                  0% { transform: translateY(var(--parallax-from)); }
                  50% { transform: translateY(0); }
                  100% { transform: translateY(var(--parallax-to)); }
                }		
			    ',
            )
        );
    }
endif;

add_action('init', 'mosayco_block_styles');

/**
 * Register pattern categories.
 */
if (!function_exists('mosayco_pattern_categories')) :
    /**
     * Register pattern categories
     *
     * @return void
     * @since Mosayco 1.0
     */
    function mosayco_pattern_categories()
    {

        register_block_pattern_category(
            'mosayco_page',
            array(
                'label' => __('Pages', 'mosayco'),
                'description' => __('A collection of full page layouts.', 'mosayco'),
            )
        );
    }
endif;

add_action('init', 'mosayco_pattern_categories');

/**
 * Register block binding sources.
 */
if (!function_exists('mosayco_register_block_bindings')) :
    /**
     * Register the copyright block binding source.
     *
     * @return void
     * @since Mosayco 1.0
     */
    function mosayco_register_block_bindings()
    {
        register_block_bindings_source(
            'mosayco/copyright',
            array(
                'label' => _x('&copy; YEAR', 'Label for the copyright placeholder in the editor', 'mosayco'),
                'get_value_callback' => 'mosayco_copyright_binding',
            )
        );
    }
endif;

/**
 * Register block binding callback function for the copyright.
 */
if (!function_exists('mosayco_copyright_binding')) :
    /**
     * Callback function for the copyright block binding source.
     *
     * @return string Copyright text.
     * @since Mosayco 1.0
     */
    function mosayco_copyright_binding()
    {
        $copyright_text = sprintf(
        /* translators: 1: Copyright symbol or word, 2: Year */
            esc_html__('%1$s %2$s', 'mosayco'),
            '&copy;',
            wp_date('Y')
        );

        return $copyright_text;
    }
endif;

add_action('init', 'mosayco_register_block_bindings');


function rm_theme_block_supports($args, $block_type)
{

    // List of block types to modify.
    $block_types_to_modify = [
        'core/post-content'
    ];

    // Check if the current block type is in the list.
    if (in_array($block_type, $block_types_to_modify, true)) {
        // Disable color controls.
        $args['supports']['align'] = [ 'wide', 'left', 'right', 'full' ];
    }

    return $args;
}

add_filter('register_block_type_args', 'rm_theme_block_supports', 10, 2);
