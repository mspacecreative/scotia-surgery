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
				<div id="header" class="clearfix">
					<div id="logo-container">
						<a href="<?php echo home_url(); ?>"/><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" />
						</a>
					</div>
					<div id="tagline">
						<h4>A surgical clinic serving Atlantic Canada</h4>
					</div>
					<div id="tagline-mobile">
						<h4>A surgical clinic serving<br>Atlantic Canada</h4>
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
					<div id="menu-container">
						<div id="menu">
							<?php $args = array(
							'theme_location' => 'main-menu'
							) ?>
							<?php wp_nav_menu( $args ); ?>
						</div>
					</div>
					<div id="contact-info">
						<h3 class="hide">18 Acadia Street, Dartmouth, Nova Scotia</h3>
						<h3 class="show">18 Acadia Street<br>Dartmouth, Nova Scotia</h3>
						<!--<label class="show-menu show" for="1">Contact</label>
						<input id="1" type="checkbox">
						<div class="answer">
							<p>Phone: 902-405-3174<br>Fax: 902-405-3430<br>E-Mail: <a href="mailto:info@scotiasurgery.com">info@scotiasurgery.com</a></p>
						</div>-->
						<p class="hide">Phone: 902-405-3174&nbsp;&nbsp;|&nbsp;&nbsp;Fax: 902-405-3430&nbsp;&nbsp;|&nbsp;&nbsp;Email:  <a href="mailto:info@scotiasurgery.com">info@scotiasurgery.com</a></p>
						<!--<p class="show">Phone: 902-405-3174<br>Fax: 902-405-3430<br>E-Mail: <a href="mailto:info@scotiasurgery.com">info@scotiasurgery.com</a></p>-->
					</div>
				</div>