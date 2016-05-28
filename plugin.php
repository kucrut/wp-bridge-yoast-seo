<?php

/**
 * Plugin Name: Bridge: Yoast SEO
 * Description: Adds SEO fields to the WordPres REST API response.
 * Version: 0.1.0
 * Author: Dzikri Aziz
 * Author URI: http://kucrut.org
 * Plugin URI: https://github.com/kucrut/wp-yoast-seo
 * License: GPLv2
 */


/**
 * Register field
 *
 * @wp_hook action rest_api_init
 */
function bridge_yoast_seo_register_field() {
	if ( ! defined( 'WPSEO_FILE' ) ) {
		return;
	}

	if ( ! class_exists( 'WP_REST_Controller' ) ) {
		return;
	}

	register_rest_field( 'post', 'bridge_seo', array(
		'get_callback'    => 'bridge_yoast_seo_get_field',
		'update_callback' => null,
		'schema'          => null,
	) );
}
add_action( 'rest_api_init', 'bridge_yoast_seo_register_field' );


/**
 * Get SEO Field
 *
 * @since 0.1.0
 *
 * @param string          $object     Object type.
 * @param string          $field_name Field name.
 * @param WP_REST_Request $request    WP REST request object.
 *
 * @return array
 */
function bridge_yoast_seo_get_field( $object, $field_name, $request ) {
	return array();
}
