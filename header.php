<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>

<body>

	<div class="preloader"><div class="pulse"></div></div>

	<header class="main_head" id="home" data-parallax="scroll" data-z-index="1" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" data-position="">
		<div class="logo_container" id="logo">
			<?php dynamic_sidebar( 'home-logo' ) ?>
		</div>
		<button class="nav_icon toggle_menu">
		  <span></span>
		  <span></span>
		  <span></span>
		</button>
		<nav class="top_menu">
			<ul>
				<li class="menu_item"><a href="#home">Home</a></li>
				<li class="menu_item"><a href="#about">About</a></li>
				<li class="menu_item"><a href="#products">Products</a></li>
				<li class="menu_item"><a href="#contacts">Contact</a></li>
			</ul>
		</nav>
		<div class="name_container">
			<h1><?php echo get_bloginfo( 'name') ?></h1>
			<p><?php echo get_bloginfo( 'description') ?></p>
		</div>
	</header>

	<!-- END HEADER -->