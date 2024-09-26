<?php
/**
 * Title: Two Headings and a List
 * Slug: mosayco/two-headings-and-a-list
 * Categories: about, columns
 * Description: An About section with a detailed description in a two-column layout, using bullet points.
 *
 * @package WordPress
 * @subpackage Mosayco
 * @since Mosayco 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">
				<?php esc_html_e( 'Let’s hear about history and ancestry', 'mosayco' ); ?>
			</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
			<h4 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase"><?php esc_html_e( 'What will happen at “Stories, historias, iсторії, iστορίες”:', 'mosayco' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:list {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
			<ul style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list has-medium-font-size">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Opportunity to learn from master photographers and historians', 'mosayco' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'A series of exhibitions, workshops, and panel discussions', 'mosayco' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Participants engage in hands-on activities that not only enhance their technical skills but also deepen their understanding of the cultural and historical contexts of the photographs', 'mosayco' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Panel discussions feature experts from various fields, including historians, anthropologists, and photographers, who explore the themes of memory, identity, and storytelling', 'mosayco' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Open conversations that delve into how photography can bridge cultural divides', 'mosayco' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
