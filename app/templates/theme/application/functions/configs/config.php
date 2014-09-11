<?php

$theme_config = array(
		'show-admin-bar' 		=> false, //default: true
		'max-posts-per-page'	=> 6
		'theme-support' 		=> array(
											'support-thumbnail' => array(
													'feature' => 'post-thumbnails',
													'arguments' => array()
												)	
										),
		'post-thumbnail-size' 	=> array(
											'width' => 585,
											'height' => 400
										),
		'images-sizes'			=> array (
											'detail' => array(
													'width' => 585,
													'height' => 400,
													'crop' => true //default: true
												)
										),
		'pages_required' 		=> array (
											'home',
											'blog'
										)
	);