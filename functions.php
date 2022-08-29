<?php
    /**
    * Inclure fichiers css
    */
    function lab1_cdh_enqueue() {
        wp_enqueue_style( 'lab1-cdh-style-css', get_stylesheet_uri());
        // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
        wp_enqueue_style( 'lab1-cdh-google-fonts', 'https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap', false );
    }
    add_action( 'wp_enqueue_scripts', 'lab1_cdh_enqueue' );
?>