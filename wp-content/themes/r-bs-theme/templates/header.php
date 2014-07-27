<header class="banner container pl0 pr0" role="banner">
	<div class="text-right">
			<?php dynamic_sidebar('sidebar-language-select'); ?>
	</div>

	<div class="">
		<div class="slider_overlay">
			<a class="brand" href="<?php echo home_url('/') ?>" title="<?php bloginfo('name'); ?>">
				<img src="<?php echo child_template_directory; ?>/assets/img/LogoRBS.gif" alt="<?php bloginfo('name'); ?> Logo" class="brand_logo">
			</a>
		</div>
	<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
			
	</div>
	
	
</header>
