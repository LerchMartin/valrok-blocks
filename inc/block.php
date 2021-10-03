<?php

class Block{
	
	public static function Create(string $name, string $title, string $description, bool $align)
	{
		return  [
			'name'              => $name,
			'title'             => __( $title ),
			'description'       => __( $description ),
			'render_template'   =>  Block::getPath($name),
			'category'          => 'valrok',
			'supports'  		=>array(
                'align' => $align,
            ),
		];
	}

	public static function getPath(string $blockName)
	{
		return BLOCK_PATH . "$blockName/$blockName.php";
	}
}

?>