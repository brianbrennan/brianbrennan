<?php 

add_theme_support('menus');

function register_theme_menus(){

	register_nav_menus(
		array(
			'side-menus' => _('Side Menu')
		)
	);
}

add_action( 'init', 'register_theme_menus');

function bp_theme_styles(){
	wp_enqueue_style('main_css',get_template_directory_uri() . '/style.css');
}


add_action('wp_enqueue_scripts', 'bp_theme_styles');

?>