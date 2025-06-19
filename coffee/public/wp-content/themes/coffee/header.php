<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'coffee'); ?></a>

		<header id="header">
			<!-- Navbar -->
			<div class="header">
				<div class="container">
					<div class="navbar">
						<div class="logo">
							<img src="<?php echo get_template_directory_uri(); ?> /assets/img/header/logo.png" alt="Logo" />
						</div>

						<div class="navbar">
							<div class="logo">
								<a href="#"><img src="/img/header/logo.png" alt=""></a>
							</div>

							<nav>
								<ul class="menu">
									<li class="menu__item">
										<a href="#Home" class="menu__item-link" data-scroll="">Home</a>
									</li>
									<li class="menu__item">
										<a href="#About" class="menu__item-link" data-scroll="">About</a>
									</li>
									<li class="menu__item">
										<a href="#Gallery" class="menu__item-link" data-scroll="">Gallery</a>
									</li>
									<li class="menu__item">
										<a href="#Contacts" class="menu__item-link" data-scroll="">Contacts</a>
									</li>
								</ul>
							</nav>
						</div>

						<button class="burger">
							<span></span>
						</button>
					</div>
				</div>
			</div>
		</header>