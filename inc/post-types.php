<?php

function dever_register_post_types() {
    $labels = [
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor','thumbnail', 'revisions'],
        'menu_position' => 100, 
        'menu_icon' => 'dashicons-admin-customizer',
    ];

    register_post_type('portfolio', $args);

    $taxLabels = [
        'name' => 'Type de projets',
        'new_item_name' => 'Nom du nouveau Projet',
    	'parent_item' => 'Type de projet parent',
    ];

    $taxArgs = [
        'labels' => $taxLabels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    ];

    register_taxonomy('project-type', 'portfolio', $taxArgs);
}

add_action('init', 'dever_register_post_types');