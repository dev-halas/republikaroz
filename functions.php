<?php

	if(!defined('THEME_DIR')) {
		define('THEME_DIR',get_theme_root().'/'.get_template().'/');
	}

	if(!defined('THEME_URL')) {
		define('THEME_URL',WP_CONTENT_URL.'/themes/'.get_template().'/');
	}

	function enqueue_vite_assets() {
    $theme_dist = get_template_directory_uri() . '/dist';

		// Pliki ładowane z katalogu "dist"
		wp_enqueue_script('theme-js', $theme_dist . '/app.js', [], null, true);
		wp_enqueue_style('theme-css', $theme_dist . '/main.css', [], null);

	}

	add_action('wp_enqueue_scripts', 'enqueue_vite_assets');

	// add post thumbnail support
	add_theme_support('post-thumbnails');

	//--------------Register menus--------------//
	if(function_exists('register_nav_menus')) { 
		register_nav_menus (array(
			'main_nav' => 'Menu glowne',
		));
	}
	
	require_once THEME_DIR.'libs/post-types.php';

	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> 'Główne ustawienia',
			'menu_title'	=> 'Główne ustawienia',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
	}

	// Skraca excerpt do 25 słów
	function custom_excerpt_length($length) {
			return 15; // Możesz zmienić np. na 20 lub 30
	}
	add_filter('excerpt_length', 'custom_excerpt_length');

	// Dodaje „…” na końcu excerptu
	function custom_excerpt_more($more) {
			return '...';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	
?>