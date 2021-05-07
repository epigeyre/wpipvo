<?php
/**
 * Whether to use planetVO images or the one stored on your server
 * Might be useful if you have troubles importing vehicles images to your server.
 * 
 * @return bool $use_planetvo_images Set to true to use planetVO images
 */
$use_planetvo_images = apply_filters( 'ipvo_use_planetvo_images', false );

/**
 * Simple example of how to use it
 */
add_filter( 'ipvo_use_planetvo_images', '__return_true' );
