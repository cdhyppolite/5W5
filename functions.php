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

// Afficher les cours en ordre de session.
function cidw_5w5_pre_get_posts(WP_Query $query)
{
    if (is_admin()
    || !$query ->is_main_query()
    || !$query ->is_category(array('cours','web','jeu','design','utilitaire','creation-3d','video'))   )
    {
        return $query;
    }        
    else
    {
        $ordre = get_query_var('ordre', 'asc');
        $cle = get_query_var('cletri', 'title');       
        $query->set('order',  $ordre);
        $query->set('orderby', $cle);

        // $query->set('postperpage','-1');
        return $query;
    }
}
function cidw_5w5_query_vars($params){
    $params[] = "cletri";
    $params[] = "ordre";
    //$params["cletri"] = "title";
    //var_dump($params); die();
    return $params;
}
add_action('pre_get_posts', 'cidw_5w5_pre_get_posts');
add_filter('query_vars', 'cidw_5w5_query_vars' );
?>