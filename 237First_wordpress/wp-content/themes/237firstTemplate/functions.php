<?php
	
function import_css(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}
	add_action('wp_enqueue_style', 'import_css');


//navigation menus
register_nav_menus(array(
	'primary' => __('Primary Menu')
));
?>