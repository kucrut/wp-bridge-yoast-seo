<?php

class Bridge_Test_Plugin extends Bridge_Test_Case {

	public function setUp() {
		parent::setUp();

		wp_set_current_user( $this->factory->user->create( array( 'role' => 'administrator' ) ) );
	}

	/**
	 * Make sure all needed classes are loaded and actions are added
	 *
	 * @covers ::bridge_yoast_seo_register_field
	 */
	public function test_plugin() {
		$this->assertTrue( defined( 'WPSEO_FILE' ) );
		$this->assertTrue( class_exists( 'WP_REST_Controller' ) );
		$this->assertEquals( 10, has_action( 'rest_api_init', 'bridge_yoast_seo_register_field' ) );
	}

	public function test_field() {
		$post_id  = $this->factory->post->create();
		$request  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $post_id );
		$response = $this->server->dispatch( $request );
		$data     = $response->get_data();

		$this->assertArrayHasKey( 'bridge_seo', $data );
	}
}
