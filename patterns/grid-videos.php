<?php
/**
 * Title: Grid with videos
 * Slug: mosayco/grid-videos
 * Categories: about, featured
 * Description: A grid with videos.
 *
 * @package WordPress
 * @subpackage Mosayco
 * @since Mosayco 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"left","level":3,"align":"wide","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
		<h3 class="wp-block-heading alignwide has-text-align-left">Explore the episodes</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"is-style-pill"} -->
		<p class="is-style-pill">Podcast</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
