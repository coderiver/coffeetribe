<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
<!-- wrapper -->
<div class="wrapper">
	<!-- bg -->
	<?php
		if (is_home()) {    
		  echo '<div class="bg" style="background-image: url('. get_template_directory_uri() .'/images/main-bg.jpg)">
		  				<div class="bg__logo" style="background-image: url('. get_template_directory_uri() .'/images/main-logo.png)"></div>
		  			</div>
		  			<!-- open -->
		  			<div class="open"></div>';
		} elseif (is_page(6)) {    
		  echo '<div class="bg" style="background-image: url('. get_template_directory_uri() .'/images/coffee-bg.jpg)">
		  				<div class="bg__logo" style="background-image: url('. get_template_directory_uri() .'/images/coffee-logo.png)"></div>
		  			</div>';
		} elseif (is_page(8)) {  
			echo '<div class="bg" style="background-image: url('. get_template_directory_uri() .'/images/food-bg.jpg)">
							<div class="bg__logo" style="background-image: url('. get_template_directory_uri() .'/images/food-logo.png)"></div>
						</div>';
		} elseif (is_page(10)) {  
			echo '<div class="bg" style="background-image: url('. get_template_directory_uri() .'/images/juices-bg.jpg)">
							<div class="bg__logo" style="background-image: url('. get_template_directory_uri() .'/images/juices-logo.png)"></div>
						</div>';
		} elseif (is_page(12)) {    
			echo '<div class="bg" style="background-image: url('. get_template_directory_uri() .'/images/organic-bg.jpg)">
							<div class="bg__logo" style="background-image: url('. get_template_directory_uri() .'/images/organic-logo.png)"></div>
						</div>';
		} elseif (is_page(25)) {    
		  echo '<div class="bg" style="background-image: url('. get_template_directory_uri() .'/images/contacts-bg.jpg)"></div>';
		}	
	?>
	<?php get_sidebar(); ?>
	