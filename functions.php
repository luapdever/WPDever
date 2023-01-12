<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

register_nav_menus([
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
]);

require_once get_template_directory() . "/inc/config.php";
require_once get_template_directory() . "/inc/post-types.php";
require_once get_template_directory() . "/inc/features.php";
