<?php
/**
 * Title: 404
 * Slug: mosayco/hidden-404
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Mosayco
 * @since Mosayco 1.0
 */

?>

<!-- wp:group {"className":"alignwide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">
        <?php echo esc_html_x( 'Page not found', '404 error message', 'mosayco' ); ?>
    </h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p><?php echo esc_html_x( 'The page you are looking for doesn\'t exist, or it has been moved. Please try searching using the form below.', '404 error message', 'mosayco' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Type something...","buttonText":"Search"} /-->
</div>
<!-- /wp:group -->
