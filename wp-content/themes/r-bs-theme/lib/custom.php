<?php 

/**
 * Custom functions
 */

function child_theme_scripts_and_styles() {
	// JS
	wp_register_script("mainjs", child_template_directory."/assets/js/main.js", array(), null, true);
	wp_enqueue_script("mainjs" );

	// CSS
	wp_register_style("droidSansFont", "http://fonts.googleapis.com/css?family=Droid+Sans", array(), null, "all");
	wp_register_style("fontawesome", child_template_directory."/assets/css/font-awesome.min.css", array(), null, "all");
	wp_register_style("style", child_template_directory."/assets/css/style.css", array(), null, "all");
	wp_register_style("helper", child_template_directory."/assets/css/helper.css", array(), null, "all");
	wp_register_style("media", child_template_directory."/assets/css/media.css", array(), null, "all");

	wp_enqueue_style("droidSansFont" );
	wp_enqueue_style("fontawesome" );
	wp_enqueue_style("style" );
	wp_enqueue_style("helper" );
	wp_enqueue_style("media" );
}

add_action('wp_enqueue_scripts', 'child_theme_scripts_and_styles', 100);

// SLIDER
// register_new_royalslider_files(1);


/* ==========================================================================
   Shortcodes
   ========================================================================== */
