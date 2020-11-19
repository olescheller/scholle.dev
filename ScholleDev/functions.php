<?php 

function scholle_add_wp_features () {

    add_theme_support( 'post-thumbnails' );
}

add_action("init", "scholle_add_wp_features");

function scholle_register_styles(){
    wp_enqueue_style('main_style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'my-theme', 'style.css', false );

}


add_action( 'wp_enqueue_scripts', 'scholle_register_styles' );
