<?php
/**
 * Title: Intro with left-aligned description
 * Slug: mosayco/intro-left-aligned-description
 * Categories: banner, featured
 * Description: A large left-aligned heading with a brand name emphasized in bold.
 *
 * @package WordPress
 * @subpackage Mosayco
 * @since Mosayco 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"align":"wide","fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size">
		<?php
			printf(
				/* translators: %1$s is the brand name, e.g., 'Fleurs'. */
				esc_html_x( 'We\'re %1$s, our mission is to deliver exquisite flower arrangements that not only adorn living spaces but also inspire a deeper appreciation for natural beauty.', 'Example pattern text', 'mosayco' ),
				'<strong>' . esc_html_x( 'Fleurs', 'Example brand name in pattern', 'mosayco' ) . '</strong>'
			);
			?>
	</h2>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
