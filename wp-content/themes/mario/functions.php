<?php

add_theme_support('post-thumbnails');

add_image_size('my-size', 200, 180, true);

function register_my_menus(){
	register_nav_menus(
		array(
			'menu-header' => __('Menu del encabezado'), 
			'menu-footer'=> __('Menu del footer')	
		)
		
	);
}

add_action('init', 'register_my_menus');