<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent blankslate
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du theme.css du thème enfant Planty
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// Ajouter un lien "Admin" en seconde position pour les utilisateurs connectés
function ajouter_lien_admin_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté et que l'on travaille sur l'emplacement "Main Menu"
    if (is_user_logged_in() && $args->theme_location == 'main-menu') { // Vérifie l'emplacement du menu
        // Récupère l'URL de la page d'administration
        $admin_url = admin_url();

        // Crée le lien "Admin"
        $admin_item = '<li class="menu-item menu-item-admin"><a href="' . $admin_url . '">Admin</a></li>';

        // Convertit les items existants en un tableau pour manipuler les positions
        $menu_items = explode('</li>', $items); // Découpe les éléments du menu en tableau

        // Insère le lien "Admin" en seconde position
        array_splice($menu_items, 1, 0, $admin_item); // Ajoute $admin_item à la position 1 (2e position)

        // Reconstruit la chaîne des items du menu
        $items = implode('</li>', $menu_items);
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2);