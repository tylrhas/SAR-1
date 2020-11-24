<?php /**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	include_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function register_my_menus() {
	register_nav_menus(
		array(
		'main' => __( 'Main' ),
		'footer' => __( 'Footer' )
		)
	);
	}
add_action('init', 'register_my_menus');
?>