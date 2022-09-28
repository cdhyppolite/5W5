<?php
    /**
    * Inclure fichiers css
    */
    function _5w5_enqueue() {
        wp_enqueue_style( 'lab1-cdh-style-css', get_stylesheet_uri());
        // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
        wp_enqueue_style( 'lab1-cdh-google-fonts', 'https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap', false );
    }
    add_action( 'wp_enqueue_scripts', '_5w5_enqueue' );

    /* -------------------------------------------------- Enregistré le menu */
function cidw_5w5_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu principal', 'cidw_5w5' ),
        'menu_footer'  => __( 'Menu footer', 'cidw_5w5' ),
        'menu_categorie_cours'  => __( 'Menu Cours', 'cidw_5w5' )
    ) );
}
add_action( 'after_setup_theme', 'cidw_5w5_register_nav_menu', 0 );
?>