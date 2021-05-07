<?php
/**
 * Allow filtering of email used on the vehicle single post
 * 
 * @param int $vehicule_id ID of the vehicle
 * @return string $concession_email Email to use
 */
$concession_email = apply_filters( 'ipvo_vl_contact_email', $concession_email, $vehicule_id );

/**
 * Simple example of how to use it
 */
 add_filter( 'ipvo_vl_contact_email', 'email@email.com' );
