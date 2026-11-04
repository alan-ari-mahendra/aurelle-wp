<?php
add_action( 'wp_enqueue_scripts', 'aurelle_child_assets' );
function aurelle_child_assets() {
	wp_enqueue_style(
		'google-fonts-aurelle',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400&family=Jost:wght@300;400;500&display=swap',
		[],
		null
	);
	wp_enqueue_style(
		'aurelle-child-style',
		get_stylesheet_uri(),
		[ 'google-fonts-aurelle' ],
		'1.0.0'
	);
	wp_enqueue_script(
		'aurelle-child-js',
		get_stylesheet_directory_uri() . '/aurelle.js',
		[],
		'1.0.0',
		true
	);
}
