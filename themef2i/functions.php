<?php

define('THEME_VERSION', '1.0.1');

// DEPENDANCES DU THEME

// Petite fonction perso dans laquelle nous allons appeller nos dépendances !
function theme_scripts() {
	// Ici nous appellons la fiche principale style.css, en appellant d'abord grace au array des dépendances la fiche bootstrap
	wp_enqueue_style('theme_custom', get_template_directory_uri() . '/style.css', array('theme_bootstrap-css'), THEME_VERSION, 'all');
	// Ici nous appellons la fiche bootstrap, tout simplement.
	wp_enqueue_style('theme_bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), THEME_VERSION, 'all');

	// Ici nous allons appeller notre fichier JS principal
	wp_enqueue_script('theme_mainscript', get_template_directory_uri() . '/js/theme.js', array('theme_bootstrap-js'), THEME_VERSION, true);
	// Ici nous appelons le js de bootstrap, en appellans jquery dans les dépendances
	wp_enqueue_script('theme_bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), THEME_VERSION, true);

	// Si on décide de ne pas afficher l'admin bar, on a cette option :
	// show_admin_bar(false);
}

// Ici nous faison l'appel de cette fameuse fonction
add_action('wp_enqueue_scripts', 'theme_scripts');


// DEPENDANCES WORDPRESS

// Dans cette fonction nous appellons des dépendances, après le setup du thème
function wp_setup() {
	// Ici nous allons tout simplement rajouter l'appel des thumbnails dans l'édition d'articles, SUR LA PLATEFORME WP (dans le "back office")
	add_theme_support('post-thumbnails');

	//Ici nous appellons la fonction qui récupère les menus crées sur wordpress
	register_nav_menus(array('primary' => 'principal'));

}

add_action('after_setup_theme', 'wp_setup');