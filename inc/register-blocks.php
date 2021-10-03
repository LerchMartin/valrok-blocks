<?php
/**
 * Register Block Class
 *
 * @package Valrok Blocks
 */

require_once(__DIR__ . '../block.php');

class ACFW_Register_Block {

	function __construct() {
		add_action('acf/init', [ $this, 'register_blocks' ] );
		// add_action('admin_menu', 'settings');
	}

	public function register_blocks() {

		if( ! function_exists( 'acf_register_block_type' ) ) {
			return;
		}

		$this -> registerAll(
			array(
				Block::Create('opening', 'OPENING', 'description', true),
				Block::Create('testimonial', 'Testimonial', 'A custom testimonial block.', true)
			)
		);
	}

	function registerAll(Array $blocks){
		foreach($blocks as $block){
			acf_register_block_type($block);
		}
	}
}

new ACFW_Register_Block();

