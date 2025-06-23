<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rokkitt:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	</head>
	

	<body <?php body_class()?>>
		<header class="header">
			<div class="headerInner">
				<a href="<?php echo esc_url(home_url('/')) ?>">
					<img src="<?php echo THEME_URL; ?>_dev/images/logo-republika-roz.svg" alt="Republika róż logo" class="headerLogo">
				</a>
				<nav class="navbar">
					<div class="mainMenu">
						<?php wp_nav_menu(['theme_location' => 'main_nav']); ?>
					</div>
					<div class="socialMedia">
						<ul>
							<li>
								<a href="#">facebook</a>
							</li>
							<li>
								<a href="#">instagram</a>
							</li>
						</ul>
					</div>
				</nav>
				<div class="hamburger">
					<div class="toggle">
						<div class="bars" id="bar1"></div>
						<div class="bars" id="bar2"></div>
						<div class="bars" id="bar3"></div>
					</div>
				</div>
			</div>
		</header>
