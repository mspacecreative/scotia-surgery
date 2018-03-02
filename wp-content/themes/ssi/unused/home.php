<?php
/* Template Name: Home */

get_header(); ?>

	<div id="banner-container">
		<div id="banner-images-container" class="clearfix">
		
			<div id="location-shot">
				
			</div>
			
			<div class="photo-gallery">
				<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/reception.jpg') no-repeat center center scroll;"></div>
				<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/consultation.jpg') no-repeat center center scroll;"></div>
				<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/oral-operatory.jpg') no-repeat center center scroll;"></div>
				<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/continuing-education.jpg') no-repeat center center scroll;"></div>
				<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/operating-theatre.jpg') no-repeat center center scroll;"></div>
				<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/sterilization.jpg') no-repeat center center scroll;"></div>
				<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/recovery.jpg') no-repeat center center scroll;"></div>
			</div>
			
		</div>
		<!--IMAGES CONTAINER-->
	</div>
	<!--BANNER CONTAINER-->
		
		<div id="main-content" class="clearfix">
			<div id="map-container">
				<iframe id="map_canvas1" width="100%" height="353" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?q=18+Acadia+Street+Dartmouth,+NS&amp;ie=UTF8&amp;hq=&amp;hnear=18+Acadia+St,+Dartmouth,+Nova+Scotia+B2Y+4H3&amp;ll=44.655709,-63.54958&amp;spn=0.006189,0.012982&amp;t=m&amp;z=14&amp;output=embed"></iframe>
			</div>
		</div>
		
		<div id="services-container">
			<div class="services-content-container">
				<div id="services-content">
					<h1 class="decorated"><span>Our Services</span></h1>
					<h2>Ambulatory Procedures</h2>
					<p class="hide">Oral&nbsp;&nbsp;|&nbsp;&nbsp;Orthopedic&nbsp;&nbsp;|&nbsp;&nbsp;Plastics&nbsp;&nbsp;|&nbsp;&nbsp;ENT&nbsp;&nbsp;|&nbsp;&nbsp;General Surgeries</p>
					<p class="show">Oral<br>Orthopedic<br>Plastics<br>ENT<br>General Surgeries<br></p>
					<h2>Oral Maxillo Facial Surgery</h2>
					<p class="hide">Dental Implants​&nbsp;&nbsp;|&nbsp;&nbsp;Wisdom Teeth Extraction</p>
					<p class="show">Dental Implants<br>Wisdom Teeth Extraction</p>
					<h2>Orthopedic Surgery</h2>
					<p class="hide">Knee Scopes&nbsp;&nbsp;|&nbsp;&nbsp;Shoulder Surgery​&nbsp;&nbsp;|&nbsp;&nbsp;Chevron Osteotomy​&nbsp;&nbsp;|&nbsp;&nbsp;Forefoot Reconstruction​&nbsp;&nbsp;|&nbsp;&nbsp;<br>Toenail Removal​&nbsp;&nbsp;|&nbsp;&nbsp;Carpal Tunnel Release​&nbsp;&nbsp;|&nbsp;&nbsp;ACL Reconstruction</p>
					<p class="show">Knee Scopes<br>Shoulder Surgery​<br>Chevron Osteotomy<br>Forefoot Reconstruction<br>Toenail Removal<br>Carpal Tunnel Release<br>ACL Reconstruction</p>
					<h2>Plastic Surgery</h2>
					<p class="hide">Scar revision&nbsp;&nbsp;|&nbsp;&nbsp;Breast augmentation&nbsp;&nbsp;|&nbsp;&nbsp;Breast reduction&nbsp;&nbsp;|&nbsp;&nbsp;<br>Blepharoplasty&nbsp;&nbsp;|&nbsp;&nbsp;Brow lift&nbsp;&nbsp;|&nbsp;&nbsp;Botox injection&nbsp;&nbsp;|&nbsp;&nbsp;Fat transfers&nbsp;&nbsp;|&nbsp;&nbsp;Liposuction</p>
					<p class="show">Scar revision<br>Breast augmentation<br>Breast reduction<br>Blepharoplasty<br>Brow lift<br>Botox injection<br>Fat transfers<br>Liposuction</p>
					<h2>ENT</h2>
					<p class="hide">Otoplasty&nbsp;&nbsp;|&nbsp;&nbsp;Surgery for Snoring&nbsp;&nbsp;|&nbsp;&nbsp;Cosmetic Rhinoplasty</p>
					<p class="show">Otoplasty<br>Surgery for Snoring<br>Cosmetic Rhinoplasty</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>