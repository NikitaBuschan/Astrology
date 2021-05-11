<?php

function strategy_assets() {

        if (is_page(10)){
           wp_enqueue_style( 'servicescss', get_template_directory_uri() . '/styles/services.css' );
        } else if (is_page(12)){
           wp_enqueue_style( 'contactscss', get_template_directory_uri() . '/styles/contacts.css' );
        } else if (is_page(16)){
           wp_enqueue_style( 'vastucss', get_template_directory_uri() . '/styles/vastu.css' );
        } else if (is_page(18)){
           wp_enqueue_style( 'programscss', get_template_directory_uri() . '/styles/programs.css' );
        } else if (is_page(23)) {
           wp_enqueue_style( 'jyotishcss', get_template_directory_uri() . '/styles/jyotish.css' );
        } else if (is_page(26)) {
           wp_enqueue_style( 'professioncss', get_template_directory_uri() . '/styles/profession.css' );
        }  else {
           wp_enqueue_style( 'maincss', get_template_directory_uri() . '/styles/home.css' );
        }

        wp_enqueue_style( 'headercss', get_template_directory_uri() . '/styles/header.css' );
        wp_enqueue_style( 'footercss', get_template_directory_uri() . '/styles/footer.css' );
}

add_action( 'wp_enqueue_scripts', 'strategy_assets' );

show_admin_bar(false);

add_theme_support( 'post-thumbnails' );

add_theme_support( 'post_thumbnails', array( 'program' ) );
