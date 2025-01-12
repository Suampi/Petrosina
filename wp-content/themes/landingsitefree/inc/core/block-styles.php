<?php
/**
 * Block Styles
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function landingsitefree_register_block_styles() {
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'landingsitefree-border',
				'label' => esc_html__( 'Borders', 'landingsitefree' ),
			)
		);
	}
	add_action( 'init', 'landingsitefree_register_block_styles' );
}
