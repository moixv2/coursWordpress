<?php

define('THEME_VERSION', '1.0.1');

function theme_scripts() {
	wp_enqueue_style('theme_css', get_template_directory_uri() . '/style.css', array('theme_custom'), THEME_VERSION, 'all');
	wp_enqueue_style('theme_custom', get_template_directory_uri() . '/css/styles.css', array(), THEME_VERSION, 'all');

	// wp_enqueue_script('theme_mainscript', get_template_directory_uri() . 'js/scripts.js', array(), THEME_VERSION, true);
	// wp_enqueue_script('theme_validation', get_template_directory_uri() . 'assets/mail/jqBootstrapValidation.js', array(), THEME_VERSION, true);
	// wp_enqueue_script('theme_contact', get_template_directory_uri() . 'assets/mail/contact_me.js', array(), THEME_VERSION, true);

}

add_action('wp_enqueue_scripts', 'theme_scripts');

function theme_options() {
	add_theme_support('post-thumbnails');
	register_nav_menus(array(
		'primary' => 'principal'
	));
}

add_action('after_setup_theme', 'theme_options');