<?php
/**
 * Register Block Class
 *
 * @package Valrok Blocks
 */

require_once(WP_PLUGIN_DIR . '/valrok-blocks/inc/block.php');

class ACFW_Register_Block {

	function __construct() {
		add_action('acf/init', [ $this, 'register_blocks' ] );
	}

	public function register_blocks() {

		if( ! function_exists( 'acf_register_block_type' ) ) {
			return;
		}

		$blocks = array(
//   		                  Name        Title   Description   Align         Keywords            Icon
			Block::Create('testimonial', 'Test', 'Description', true, ['keyword1', 'keyword2'], 'heading'),
		);

		$this -> registerAll($blocks);
		$this -> importStyles($blocks);
	}

	function registerAll(Array $blocks){
		foreach($blocks as $block){
			acf_register_block_type($block);
		}
	}

	function importStyles(Array $blocks){
		
		$importString = "";

		foreach($blocks as $block){
			$importString .= "@import '../../blocks/" . $block['name'] . "/" . $block['name'] . ".scss'; \r\n";
		}

		$stylePath = WP_PLUGIN_DIR . '/valrok-blocks/style/style_imports.scss';

		file_put_contents($stylePath, $importString);

	}
}

new ACFW_Register_Block();

