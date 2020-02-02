<?php 

function dhcorp_style_script( )  
{
    wp_enqueue_style( 'all',get_template_directory_uri().'/style/all.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slider',get_template_directory_uri().'/style/slider.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animation',get_template_directory_uri().'/style/animation.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'swiper','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.css', '1.0.3', 'all' );
    wp_enqueue_style( 'pages',get_template_directory_uri().'/style/pages.css', array(), '1.0.3', 'all' );

}

add_action( 'wp_enqueue_scripts', 'dhcorp_style_script' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
register_nav_menu( 'main', 'Menu Principal' )


?>