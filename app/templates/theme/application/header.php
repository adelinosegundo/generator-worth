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
		<script src="<?php echo get_template_directory_uri(); ?>/assets/bower_components/modernizr/modernizr.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/bower_components/pace/pace.min.js"></script>
		<!-- fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" type="text/css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/aller/font.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/bree/font.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/sifonn/font.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/simple-line-icons/simple-line-icons.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/icomoon/style.css">
		<!-- stylesheets::vendor -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bower_components/pace/themes/pace-theme-minimal.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/owl.transitions.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/sidr/stylesheets/jquery.sidr.dark.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate/animate.css">
		<!-- stylesheets::main -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/main.css">
		<!-- scripts -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/bower_components/modernizr/modernizr.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/bower_components/pace/pace.min.js"></script>
		<script>
  			// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			// (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			// m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  			// ga('create', 'UA-50766490-1', 'continuumfestival.com');
  			// ga('send', 'pageview');
		</script>
		<!-- wordpress -->
		<?php wp_head(); ?>
	</head>
	<body>

