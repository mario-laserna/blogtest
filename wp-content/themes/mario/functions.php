<?php

//permite activar las imagenes destacadas en los posts
add_theme_support('post-thumbnails');

//esta es la funcion que nos añade un tamaño extra por imagenes
add_image_size('my-size', 200, 180, true);

//Esta es la funcion que llama al menu
function register_my_menus(){
	register_nav_menus(
		array(
			'menu-header' => __('Menu del encabezado'), 
			'menu-footer'=> __('Menu del footer')	
		)
		
	);
}

add_action('init', 'register_my_menus');

//funcion que añade un sidebar
function miplugin_register_sidebar(){
	register_sidebar(
		array(
			'id'			=>	'sidebar-footer',
			'name'			=>	'Sidebar del footer',
			'description'	=>	'Sidebar donde colocar links del footer',
			'before_widget'	=>	'<div class="sidebar__item">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<strong>',
			'after_title'	=>	'</strong>'
		)
	);
}

add_action('widgets_init', 'miplugin_register_sidebar');

function miplugin_register_sidebar2(){
	register_sidebar(
		array(
			'id'			=>	'sidebar-header',
			'name'			=>	'Sidebar del header',
			'description'	=>	'Sidebar donde colocar links del header',
			'before_widget'	=>	'<div class="sidebar__item">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<strong>',
			'after_title'	=>	'</strong>'
		)
	);
}

add_action('widgets_init', 'miplugin_register_sidebar2');