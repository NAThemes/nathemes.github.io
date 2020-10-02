<?php if(isset($_POST['contact'])) { $error = ale_send_contact($_POST['contact']); }?>
<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<header class="header wrapper">
	<div class="inner_header">
		<?php if ( has_nav_menu( 'header_menu' ) ) { ?>
			<nav class="main_menu">
				<?php
				wp_nav_menu(array(
					'theme_location'=> 'header_menu',
					'menu'			=> 'Header Menu',
					'menu_class'	=> 'nav_links',
					'walker'		=> new Aletheme_Nav_Walker(),
					'container'		=> '',
				)); ?>
			</nav>
			<div class="hamburger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
		<?php
		} ?>
	</div>
</header>