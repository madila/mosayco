<?php

function rm_site_logo_render( $attributes, $content ) {
    /**
     * Here you find an array with the ids of all
     * the images that are in your gallery.
     *
     * for example:
     * $attributes = [
     *     "ids" => [ 12, 34, 56, 78 ]
     * ]
     *
     * Now have fun querying them,
     * arrangin them and returning your constructed markup!
     */
    $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' );
    return '<div class="wp-block-site-logo"><a href="'.get_site_url().'" class="custom-logo-link" rel="home"><figure class="custom-logo" style="max-width:'.$attributes['width'].'px">'.file_get_contents( wp_get_upload_dir()['basedir'].str_replace(get_site_url(null, 'wp-content/uploads'), '', $logo[0]) ).'</figure></a></div>';
}


function rm_register_site_logo() {
    $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' );
    if(isset($logo[0]) && str_contains($logo[0], 'svg')) {
        register_block_type('core/site-logo', array(
            'render_callback' => 'rm_site_logo_render',
        ));
    }
}

//add_action( 'init', 'rm_register_site_logo' );
