<?php 
/* Child theme generated with WPS Child Theme Generator */
            
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . 'style.css', array( 'parent-style' ) );
    }
}

/* Ajout de la possibilité d'ajoute un logo dans Apparence */
function blankslate_child_setup() {
    add_theme_support('custom-logo');
}
    
add_action( 'after_setup_theme', 'blankslate_child_setup' );

/* Ajoute d'un nouvel emplacement de menu */

register_nav_menus( array( 'footer-menu' => esc_html__( 'Footer Menu', 'blankslate' ) ) );


/* Ajout du lien Admin pour les utilisateurs connectés */

function add_admin_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'main-menu') {

        $items .= '<li class="Lien_admin"><a href="'. get_admin_url() .'">Admin</a></li>';

    }

    return $items;
}

add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );