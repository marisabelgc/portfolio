<?php

function allScripts() {  
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );	
  if(is_singular() || is_home() || is_404()){
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/jquery-main.js', '', '', true );
  }  
}

add_action( 'wp_enqueue_scripts', 'allScripts' );

// Detele wordpress bar front-end
add_filter( 'show_admin_bar', '__return_false' );

// Elimina errores en el login de Wordpress
function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

// Eliminar login con email
remove_filter( 'authenticate', 'wp_authenticate_email_password', 20 );

function custom_theme_setup(){
  // WordPress Titles
  add_theme_support( 'title-tag' );

  // Support Featured Images
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme' , 'custom_theme_setup' );

// Devuelve la url de la img del psot
function main_image_url( $size ){
  global $post;
  $image_id = get_post_thumbnail_id( $post->ID);
  $main_image = wp_get_attachment_image_src(  $image_id, $size);
  return $main_image[0];
}