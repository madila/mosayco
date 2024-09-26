<?php
/**
 * Title: Landing page for Book
 * Slug: mosayco/page-landing-book
 * Categories: mosayco_page, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A landing page for the book with a hero section, pre-order links, locations, FAQs and newsletter signup.
 *
 * @package WordPress
 * @subpackage Mosayco
 * @since Mosayco 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:pattern {"slug":"mosayco/hero-book"} /-->
	<!-- wp:pattern {"slug":"mosayco/cta-book-links"} /-->
	<!-- wp:pattern {"slug":"mosayco/banner-about-book"} /-->
	<!-- wp:pattern {"slug":"mosayco/cta-book-locations"} /-->
	<!-- wp:pattern {"slug":"mosayco/text-faqs"} /-->
	<!-- wp:pattern {"slug":"mosayco/newsletter-sign-up"} /-->
</div>
<!-- /wp:group -->
