<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title><?php echo get_bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<meta name="robots" content="index,follow">
		<meta name="viewport" content="initial-scale=1.0 maximum-scale=1.0 user-scalable=no">
		<!-- meta tags -->
		<meta name="author" content="DZ3 Design e Tecnologia">
		<meta name="description" content="<?php echo get_bloginfo('description') ?>">
		<meta name="keywords" content="Keywords for search engines">
		<!-- facebook tags -->
		<meta property="og:image" content="">
		<meta property="og:description" content="<?php echo get_bloginfo('description') ?>">
		<!-- scripts -->
		<script src="<?php get_assets_root_uri(); ?>/bower_components/modernizr/modernizr.js"></script>
		<script src="<?php get_assets_root_uri(); ?>/bower_components/pace/pace.min.js"></script>
		<!-- fonts -->
		<!-- stylesheets::vendor -->
		<!-- stylesheets::main -->
		<link rel="stylesheet" href="<?php get_assets_root_uri(); ?>/styles/main.css">
		<!-- scripts -->
		<script src="<?php get_assets_root_uri(); ?>/bower_components/modernizr/modernizr.js"></script>
		<script src="<?php get_assets_root_uri(); ?>/bower_components/pace/pace.min.js"></script>
		<!-- wordpress -->
		<?php wp_head(); ?>
	</head>
	<body>

