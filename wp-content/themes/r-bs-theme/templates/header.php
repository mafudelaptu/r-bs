
<div class="banner navbar navbar-default navbar-static-top navbar-absolute navbar-fixed-top" role="banner" id="mobile_nav">
	<div class="container">
		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo home_url(); ?>/">
				<img src="<?php echo child_template_directory; ?>/assets/img/Logo_ohne_Text_transparent.png" alt="<?php bloginfo('name'); ?> Logo" class="logo_mobile" height="30">
				<span><?php bloginfo('name'); ?></span>
			</a>
			<div class="lang_select_mobile">
				<?php dynamic_sidebar('sidebar-language-select'); ?>
			</div>
		</div>

		<nav class="collapse navbar-collapse" role="navigation">
			<?php
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
			endif;

			?>
			<hr>
			 <?php include roots_sidebar_path(); ?>
		</nav>
	</div>
</div>

<header class="banner container pl0 pr0" role="banner" id="header">
	<div class="text-right" id="lang_select">
		<?php dynamic_sidebar('sidebar-language-select'); ?>
	</div>

	<div>
		<div class="slider_overlay">
			<a class="brand" href="<?php echo home_url('/') ?>" title="<?php bloginfo('name'); ?>">
				<img src="<?php echo child_template_directory; ?>/assets/img/LogoRBS.gif" alt="<?php bloginfo('name'); ?> Logo" class="brand_logo">
			</a>
		</div>
		<?php echo do_shortcode("[huge_it_slider id='1']"); ?>

	</div>
	
	
</header>

