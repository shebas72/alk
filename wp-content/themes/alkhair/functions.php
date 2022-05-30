<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

register_nav_menus( array(
        'main'    => __( 'main', 'alf' ),
      
    ) );

    function wpb_change_search_url() {
        if ( is_search() && ! empty( $_GET['s'] ) ) {
            wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
            exit();
        }   
    }
    add_action( 'template_redirect', 'wpb_change_search_url' );
    
function alf_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'title', 'alf' ),
        'id'            => 'title',
        'description'   => __( 'Top heading', 'alf' ),
        'before_widget' => '<section class="page-title parallax-bg page-title-bg overlay dark-5 ptb-190" data-stellar-background-ratio="0.5">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="container"><div class="row"><h2 class="text-right">',
        'after_title'   => '</div></div></h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'head', 'platinum' ),
        'id'            => 'head',
        'description'   => __( 'Next heading', 'platinum' ),
        'before_widget' => '<div class="text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'bread', 'platinum' ),
        'id'            => 'bread',
        'description'   => __( 'Add widgets here to appear in your breadcrumbs.', 'platinum' ),
        'before_widget' => '<div class="text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
        
    ) );
}
add_action( 'widgets_init', 'alf_widgets_init' );    
    
function first_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="section-sub">', $content, 1);
}
//add_filter('the_content', 'first_paragraph');

function second_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="section-sub">', $content, 1);
}
//add_filter('the_content', 'first_paragraph');

function third_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="section-sub">', $content, 1);
}
//add_filter('the_content', 'first_paragraph');

function four_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="text-center">', $content, 1);
}
//add_filter('the_content', 'first_paragraph');


function news_custom_post() {
    $labels = array(
            'name'               => _x( 'name', 'post type general name' ),
        'singular_name'      => _x( 'cat name', 'post type singular name' ),
        'add_new'            => _x( 'Add new', 'gallery' ),
        'add_new_item'       => __( 'add new item' ),
        'edit_item'          => __( 'edit' ),
        'new_item'           => __( 'new item' ),
        'all_items'          => __( 'all' ),
        'view_item'          => __( 'view' ),
        'search_items'       => __( 'Search' ),
        'not_found'          => __( 'Not found' ),
        'not_found_in_trash' => __( 'not here too ' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'News'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
         'order' => 'ASC',
        'supports'      => array( 'title', 'thumbnail', 'editor' ),
        'has_archive'   => true,
        'taxonomies' => array('category'),
        'exclude_from_search'   => true,
        'show_in_menu'   => true,
        'show_in_nav_menus'   => false,
    );
    register_post_type( 'news', $args );
}
add_action( 'init', 'news_custom_post' );

function funds_custom_post() {
    $labels = array(
            'name'               => _x( 'name', 'post type general name' ),
        'singular_name'      => _x( 'cat name', 'post type singular name' ),
        'add_new'            => _x( 'Add new', 'gallery' ),
        'add_new_item'       => __( 'add new item' ),
        'edit_item'          => __( 'edit' ),
        'new_item'           => __( 'new item' ),
        'all_items'          => __( 'all' ),
        'view_item'          => __( 'view' ),
        'search_items'       => __( 'Search' ),
        'not_found'          => __( 'Not found' ),
        'not_found_in_trash' => __( 'not here too ' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Funds'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
         'order' => 'ASC',
        'supports'      => array( 'title', 'thumbnail', 'editor' ),
        'has_archive'   => true,
        'taxonomies' => array('category'),
        'exclude_from_search'   => true,
        'show_in_menu'   => true,
        'show_in_nav_menus'   => false,
    );
    register_post_type( 'funds', $args );
}
add_action( 'init', 'funds_custom_post' );



if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
add_image_size( 'attachment-post-thumbnail', 150, 110, true ); //(cropped)
add_image_size( 'newphisolgy',100 , 265, true ); //(cropped)


}

function new_nav_menu_items($items,$args) {
if (function_exists('icl_get_languages')) {
$languages = icl_get_languages('skip_missing=0');
if(1 < count($languages)){
foreach($languages as $l){
if(!$l['active']){
$items = $items.'<li class="menu-item"><a href="'.$l['url'].'"> '.$l['native_name'].'</a></li>';
}
}
}
}
return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items',10,2 )

?>