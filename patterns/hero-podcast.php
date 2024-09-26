<?php
/**
 * Title: Hero podcast
 * Slug: mosayco/hero-podcast
 * Categories: featured, hero
 * Keywords: podcast, hero, stories
 *
 * @package WordPress
 * @subpackage Mosayco
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-podcast.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for hero image', 'mosayco' ); ?>"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-xx-large-font-size">The Stories Podcast</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
			<p style="padding-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Storytelling, expert analysis, and vivid descriptions. The Stories Podcast brings history to life, making it accessible and engaging for a global audience.', 'Podcast description', 'mosayco' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"fontSize":"large"} -->
			<h2 class="wp-block-heading has-large-font-size" style="padding-top:var(--wp--preset--spacing--30)"><strong>Subscribe on your favorite platform</strong></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-pill"} -->
				<p class="is-style-pill"><a href="#"><?php echo esc_html_x( 'Youtube', 'Button text', 'mosayco' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-pill"} -->
				<p class="is-style-pill"><a href="#"><?php echo esc_html_x( 'Apple Podcasts', 'Button text', 'mosayco' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-pill"} -->
				<p class="is-style-pill"><a href="#"><?php echo esc_html_x( 'Spotify', 'Button text', 'mosayco' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-pill"} -->
				<p class="is-style-pill"><a href="#"><?php echo esc_html_x( 'Pocket Casts', 'Button text', 'mosayco' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-pill"} -->
				<p class="is-style-pill"><a href="#"><?php echo esc_html_x( 'RSS', 'Button text', 'mosayco' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
