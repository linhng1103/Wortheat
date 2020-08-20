<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'twentytwenty', get_template_directory_uri().'/style.css' );
}

function add_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato|Roboto&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'add_fonts' );
?>