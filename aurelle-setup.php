<?php
/**
 * One-time Aurelle setup script.
 * Visit this URL once, then delete the file.
 */

define( 'ABSPATH_CHECK', true );
require_once __DIR__ . '/wp-load.php';

if ( ! current_user_can( 'manage_options' ) && ! ( defined( 'WP_CLI' ) && WP_CLI ) ) {
	wp_die( 'Please log in as an admin first.' );
}

$results = [];

// 1. Activate child theme
switch_theme( 'aurelle-child' );
$results[] = 'Theme switched to aurelle-child: ' . ( get_stylesheet() === 'aurelle-child' ? 'OK' : 'FAILED – ' . get_stylesheet() );

// 2. Create / find home page with Aurelle Home template
$existing = get_posts( [
	'post_type'      => 'page',
	'post_status'    => 'publish',
	'meta_key'       => '_wp_page_template',
	'meta_value'     => 'page-home.php',
	'posts_per_page' => 1,
] );

if ( $existing ) {
	$page_id = $existing[0]->ID;
	$results[] = 'Home page already exists (ID ' . $page_id . ').';
} else {
	$page_id = wp_insert_post( [
		'post_title'  => 'Home',
		'post_status' => 'publish',
		'post_type'   => 'page',
	] );
	update_post_meta( $page_id, '_wp_page_template', 'page-home.php' );
	$results[] = 'Home page created (ID ' . $page_id . ').';
}

// 3. Set as front page
update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $page_id );
$results[] = 'Front page set to ID ' . $page_id . '.';

// 4. Flush rewrite rules
flush_rewrite_rules();
$results[] = 'Rewrite rules flushed.';

echo '<style>body{font-family:sans-serif;padding:40px;background:#F8F5F0;color:#2A2630;}</style>';
echo '<h2>Aurelle Setup</h2><ul>';
foreach ( $results as $r ) {
	echo '<li>' . esc_html( $r ) . '</li>';
}
echo '</ul>';
echo '<p><strong>Done! <a href="' . home_url() . '">View your site</a>.</strong></p>';
echo '<p style="color:#C9A092;">Delete this file after setup: <code>aurelle-setup.php</code></p>';
