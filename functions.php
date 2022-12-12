<?php
//--------------------------------------------------------- Fichiers à inclure
function e4_5w5_enqueue(){
    
    wp_enqueue_style('5w5-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
    wp_register_script('5w5-menuJS', get_template_directory_uri() . '/js/menu.js', array(), filemtime(get_template_directory() . '/js/menu.js'), true);
    wp_register_script('5w5-projetsJS', get_template_directory_uri() . '/js/projets.js', array(), filemtime(get_template_directory() . '/js/projets.js'), true);
    wp_register_script('5w5-404', 'https://kit.fontawesome.com/4b9ba14b0f.js', array(), 'https://kit.fontawesome.com/4b9ba14b0f.js', true);
    
    // Ajout des scripts JS
    wp_enqueue_script('5w5-menuJS');
    if (is_404())
        wp_enqueue_script('5w5-404');
    if (is_category('projets')) 
        wp_enqueue_script('5w5-projetsJS');
}

add_action("wp_enqueue_scripts", "e4_5w5_enqueue");

/* -------------------------------------------------- Enregistré le menu */
function e4_5w5_register_nav_menu(){
    register_nav_menus(array(
        'menu_principal' => __('Menu principal', 'e4_5w5') ,
        // 'menu_footer' => __('Menu footer', 'e4_5w5') ,
        // 'menu_categorie_cours' => __('Menu Cours', 'e4_5w5')
    ));
}
add_action( 'after_setup_theme', 'e4_5w5_register_nav_menu', 0 );

/****************** - Add Thème support -***************** */
 function e4_5w5_add_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 100,
    ));
 }
add_action( 'after_setup_theme', 'e4_5w5_add_theme_support' );


// ------------------------------------ Enregistrement des side bar
add_action( 'widgets_init', 'e4_5w5_register_sidebars' );
function e4_5w5_register_sidebars() {
    // Réseaux
    register_sidebar(
        array(
            'id'            => 'reseaux_sb',
            'name'          => __( 'Réseaux sociaux' ),
            'description'   => __( 'Affiche les réaux sociaux' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

// Afficher les cours en ordre de session.
function e4_5w5_pre_get_posts(WP_Query $query)
{
    if (is_admin()
    || !$query ->is_main_query()
    || !$query ->is_category(array('cours','profs', 'projets')))
    {
        return $query;
    }        
    else
    {
        $ordre = get_query_var('ordre', 'asc');
        $cle = get_query_var('cletri', 'title');       
        $query->set('order',  $ordre);
        $query->set('orderby', $cle);
        
        return $query;
    }
}
function e4_5w5_query_vars($params)
{
    $params[] = "cletri";
    $params[] = "ordre";
    return $params;
}
add_action('pre_get_posts', 'e4_5w5_pre_get_posts');
add_filter('query_vars', 'e4_5w5_query_vars');

?>