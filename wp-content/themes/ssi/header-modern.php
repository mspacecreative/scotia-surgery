<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper">
			<div id="container">
				<div id="header" class="modern">
					<div class="inner clearfix">
						<div id="logo-container">
							<a href="<?php echo home_url(); ?>"/><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" />
							</a>
						</div>
						<div id="mobile-buttons" class="clearfix">
							<div class="button-1">
								<div class="inner-button">
									<div class="cell">
										<a href="tel:19024053430" class="buttons">Call</a>
									</div>
								</div>
							</div>
							<div class="button-2">
								<div class="inner-button">
									<div class="cell">
										<a href="mailto:info@scotiasurgery.com" class="buttons">Email</a>
									</div>
								</div>
							</div>
							<div class="button-3">
								<div class="inner-button">
									<div class="cell">
										<a href="#map-container" class="buttons">Location</a>
									</div>
								</div>
							</div>
						</div>
						<?php $args = array(
						'theme_location' => 'primary'
						) ?>
						<?php wp_nav_menu(); ?>
					</div>
				</div>