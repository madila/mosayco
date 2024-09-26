<?php
/**
 * Title: Photo blog home
 * Slug: mosayco/photo-blog-home
 * Template Types: front-page, index, home
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Mosayco
 * @since Mosayco 1.0
 */

?>
<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-pill"} -->
		<h1 class="wp-block-heading has-text-align-center is-style-pill">Stories</h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size">Tell your story</h2>
	<!-- /wp:heading -->
	<!-- wp:pattern {"slug":"mosayco/photo-blog-posts"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
