<?php function ressources() {

// Chargement des styles

wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
wp_enqueue_style('commentaires', get_template_directory_uri() . '/commentaires.css');

// Chargement des scripts
//wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js');
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js'); 
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/js.js'); 

}

add_action('wp_enqueue_scripts', 'ressources');
add_theme_support( 'post-thumbnails' );


?>